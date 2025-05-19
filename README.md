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

The script `k8s\_sync\_ilias` can be used to synchronize ILIAS data (iliasdata
and database) between two apps and their respective Kubernetes namespaces. This
is useful for example for copying basic configuration settings from one app to
another.

> [!caution]
> This completely overwrites the data in the destination app/namespace

Usage:

```
k8s_sync_ilias <source_ns> <destination_ns>
```
