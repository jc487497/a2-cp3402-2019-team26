# The Coffee Can

## Environments

The Coffee Can website is worked on in three environments
* [The production site](https://ductuann.sgedu.site/publish/): The live version of the site, containing the latest stable version of the theme and published
 site content
* [The staging site](https://ductuann.sgedu.site/a2/): The environment used to test the theme on a remote web server and draft web content
* Local development environments: The virtual machine on your local device used to develop and test theme changes 


## Branches

### Main Branches
The project has two main branches:
* master: The branch used by the production site
* Staging: The branch used by the staging site (Your local development environment should be on this branch)

### Feature Branches
When developing new features for the theme, do not work directly on the Staging branch. Make an appropriately named 
feature branch off of Staging. When the feature is finished, it should be merged back into 'Staging'.

As an example, if you wanted to develop the themes header, you would:
1. Make a new branch from Staging called 'header'
2. Make changes to the themes header and test them within the 'header' branch
3. Merge the 'header' branch back into the 'Staging' branch when the header is complete


## Setting up your local environment

1. Open your command terminal and follow the instructions to create a [Scotch Box virtual machine](https://box.scotch.io/)
2. [Download Wordpress](https://wordpress.org/download/) and extract the contents into the public folder of your Scotch
Box
3. Delete the wp-content folder
4. In the command terminal, navigate to the public folder of the Scotch Box and enter 
 **git clone https://github.com/cp3402-students/a2-cp3402-2019-team26.git -b Staging** to clone the website files
5. Rename the folder containing the project files to **wp-content**
6. [Open your Scotch box in your web browser](192.168.33.10) and follow the Wordpress installation process
7. When prompted to enter the database details, change the table prefix option to **wp8v**
8. Open the project files in your IDE of choice and [add any local project files to .gitignore]
(https://git-scm.com/docs/gitignore)
9. Add the [theme unit test](https://codex.wordpress.org/Theme_Unit_Test) to your local wordpress site

## Working on Site Content

To make it as easy as possible to migrate site content as well as to avoid having to move content from several different
 local environments, site content is to be drafted on the staging site. This provides an environment that is as close as
 possible to the live site that can be used to test content that can be accessed by anyone who is working on the site.
 
 If you want to test how content will be affected by changes to the theme that are being tested in your local
 environment, migrate the database to your local environment.

## Updating the Remote Sites

### Webhooks

This project utilises webhooks to keep the staging an production sites up to date. Webhooks send data about activity on 
the Github repository to connected web pages. Both the staging and production site have webhooks that will respond to 
the following :

* Staging site: a commit is pushed to the 'Staging' branch
* Production site: a commit is pushed to the 'master' branch

When these activities occur, the site will automatically pull the latest version of the project files.

### Updating the Staging Site

Whenever a feature is completed, merge its feature branch into the 'Staging' branch and push the changes. The staging 
site will then automatically pull the latest version of of the 'Staging' branch.

### Updating the Production Site

When a stable version of the project is ready, it can be moved to the production site. This is done in a similar way to
updating the staging site, but with a couple of extra steps.

Website content is drafted on the staging site, so there may have been files (media, plugins, etc.) that are on the 
staging site but not yet added to the repository. To add them, do the following:

1. SSH into the web server containing the production site
    * The host name is **ductuann.sgedu.site**
    * The port number is **18765**
2. Navigate to the project files using **cd public_html/a2/wp-content**
3. Enter the following commands
    * **git add -A**
    * **git commit -a -m Update content to match staging site**
    * **git push**
    
After this is done, merge the 'Staging' branch into the 'master' branch and the webhook will automatically update the 
production sites wp-content folder. Then migrate the database from the staging site to the production site to finish up.

### The sites aren't updating by themeselves. Help!

While the webhooks should work fine most of the time, occasionally they may not work when a commit is pushed. This is 
usually because the sites local version of the repository has a commit that is not on the remote version. When this
 happens an error will occur if it attempts to pull from the remote repository.
 
 To fix this:
 
 1. SSH into the web server containing the production site
     * The host name is **ductuann.sgedu.site**
     * The port number is **18765**
 2. Navigate to the project files using
    * **cd public_html/a2/wp-content** for the staging site
    * **cd public_html/publish/wp-content** for the production site
 3. run **git pull** and follow the instructions to resolve the conflict

## Migrating the Database

This project uses the 'Wp Migrate DB' plugin to migrate the Wordpress database between environments. The plugin is in 
the project files, so it is available in all environments. Make sure it is activated by checking the plugins page of the
Wordpress dashboard before starting.

To migrate the database from one environment to another:
1. Open the Wp Migrate DB menu in both the current site and the target site
    * It can be found under the tools tab in the Wordpress dashboard
2. Copy the URL and file path of the 'find' column of the target site and paste them into the 'replace' columns of the 
 starting site
3. Click the 'export' button and save the file to your local device
4. Open the database manager of your target site database (e.g. phpMyAdmin)
5. Backup the current contents of the target database
6. Import the new version of the database using the file on your local device

### After migrating the database, Wordpress runs the installer. What went wrong?

Wordpress looks for database tables with a specific table prefix, in this case wp8v_. If this value is set 
incorrectly it won't find the new tables so it will try to run a fresh install.

This problem has a simple fix:
1. Open the wp-config file located in the root folder of your wordpress install
2. Search for the table_prefix variable
3. Change it to **wp8v_**
