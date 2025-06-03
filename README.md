# OpenCast Review Apps

Build and deploy apps for development and review purposes.

## Usage

### Creating a new app

1. Clone the repository:
   ```
   git clone git@github.com:opencast-ilias/ReviewApps.git
   ```

2. Check out a new branch based on the ILIAS version you want to target (e.g.
   ILIAS 9):
   ```
   git checkout release_9
   git checkout -b oc_pr_42
   ```

3. Update the workflow definition in `.github/workflows/default.yml` and set
   the variables accoring to your needs. You'll probably have to update the
   options `namespace` and `ingress_hostname` in the `deploy` job definition:
   ```
      - name: Deploy the Helm chart
        uses: opencast-ilias/actions/deploy-ilias@main
        with:
          namespace: review-oc-pr-42
          ingress_hostname: oc-pr-42.opencast.k8s.sr.solutions
   ```

4. Add the required submodules or update them as needed:
   ```
   # add submodules if they do not yet exist
   git submodules add git@github.com:opencast-ilias/OpenCast.git Customizing/global/plugins/Services/Repository/RepositoryObject/OpenCast
   git submodules add git@github.com:opencast-ilias/OpencastPageComponent.git Customizing/global/plugins/Services/COPage/PageComponent/OpencastPageComponent

   # check out the respective versions
   git -C Customizing/global/plugins/Services/Repository/RepositoryObject/OpenCast checkout <commit>
   git -C Customizing/global/plugins/Services/COPage/PageComponent/OpencastPageComponent checkout <commit>
   ```

5. Commit and push your changes. The `build` and `deploy` jobs should run
   automatically. You can verify and check the workflow state in the tab `Actions` on Github:
   https://github.com/opencast-ilias/ReviewApps/actions

6. Once the `deploy` job is completed, the app should become available under
   the subdomain set as `ingress_hostname` (see step 3) within a few minutes.

### Syncing app data

The script `k8s_sync_ilias` can be used to synchronize ILIAS data (iliasdata
and database) between two apps and their respective Kubernetes namespaces. This
is useful for example for copying basic configuration settings from one app to
another.

> [!caution]
> This completely overwrites the data in the destination app/namespace

Usage:

```
k8s_sync_ilias <source_ns> <destination_ns>
```

## FAQ

> Why are we using an additional repository for ReviewApps and not jsut the Opencast-Repo?

There are two important reasons for this:
- Security: By using a private repository, we can control who is authorised to start ReviewApp. If we did this in a public repository, anyone (forks) could simply start new ReviewApps and obtain ILIAS installations that grant full access (including to the Opencast server via API).
- Multi-plugins: By using submodules, we can pack any number of plugins into a ReviewApp. We use this in particular because, for example, the OpencastPageComponent plugin also requires the Opencast plugin.


> How do I create a new ReviewApp from a Branch of my Opencast-Fork?

Checkout the ReviewApp-Repo with the Branch which fits best for your Plugin-version (e.g. release_9)

```
git clone git@github.com:opencast-ilias/ReviewApps.git
cd ReviewApps
git checkout release_9
```

Create a new Branch for your ReviewApp, use a branch name which reflects the name of the ReviewApp, 
most likely something like the PR number

```
git checkout -b pr-501
```

Set the Submodule-URL for the Plugin(s) to your fork, e.g. for the Opencast-Plugin. You may only need 
to do this once if you always want to run your review apps from the same fork. It is best to prepare a 
local branch from which you want to create new ReviewApp branches. 

```
git submodule set-url Customizing/global/plugins/Services/Repository/RepositoryObject/OpenCast https://github.com/srsolutionsag/OpenCast.git
git submdule sync
git submdule update 
```

Now checkout the branch of the plugin you want to add to the ReviewApp

```
git -C Customizing/global/plugins/Services/Repository/RepositoryObject/OpenCast checkout <branch_name>
```

Add the changes, commit and push:

```
git commit -am "ReviewApp for PR XY"
git push -u
```

Follow the output of the Github-Actions here: [Actions](https://github.com/opencast-ilias/ReviewApps/actions).

It starts with building the (ILIAS-)Image for this ReviewApp:
<img width="1491" alt="Bildschirmfoto 2025-05-22 um 14 39 26" src="https://github.com/user-attachments/assets/a74fcb68-b54b-4e9b-933c-c41e4ed012ab" />

After the second task (deploy) has been finished, you can find the URL of the ReviewApp in the log:
<img width="1489" alt="Bildschirmfoto 2025-05-22 um 14 44 01" src="https://github.com/user-attachments/assets/e40830d8-03f9-4154-bc24-89b654e41488" />

> How do I update a ReviewApp (to push new commits)?

By using the example from above, you can:


```
git checkout -b pr-501
git -C Customizing/global/plugins/Services/Repository/RepositoryObject/OpenCast checkout <branch_name>
git -C Customizing/global/plugins/Services/Repository/RepositoryObject/OpenCast pull --rebase
git commit -am "Updated ReviewApp for PR XY"
git push -u
```

> How can I run the ILIAS Setup (to update the plugin db steps)?

You can trigger the ILIAS Setup by using a manual workflow in [Update ILIAS Actions](https://github.com/opencast-ilias/ReviewApps/actions/workflows/update.yml):

![image](https://github.com/user-attachments/assets/24d3c966-3a8f-4ccc-939e-1726e88f0d8b)

- Choose "Run Workflow"
- Use Workflow from branch "release_9" fits for all release_9 based ReviewApps
- Change the Namespace to "review-<Name of your App>"
- Press "Run Workflow"

The <Name of your App> is the same as in the URL (e.g. pr-435.opencast.…) or whatever you defined in [.github/workflows/default.yaml](https://github.com/opencast-ilias/ReviewApps/blob/release_9/.github/workflows/default.yml#L49).

You then should see a "update" Job which logs the output of the ILIAS Setup:

![image](https://github.com/user-attachments/assets/8591d722-2909-477a-b635-333c019d22fc)





