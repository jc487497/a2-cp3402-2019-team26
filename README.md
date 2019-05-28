# The Coffee Can

## Environments

The Coffee Can website is worked on in three environments
* [The production site](): The live version of the site, containing the latest stable version of the theme and published
 site content
* [The staging site](): The environment used to test the theme on a remote web server and draft web content
* Local development environments: The virtual machine on your local device used to develop and test theme changes 

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

## Updating the Remote Sites

This project utilises webhooks to keep the staging an production sites up to date. Webhooks send data about activity on 
the Github repository to connected web pages. Both the staging and production site have webhooks that will respond to 
the following :

* Staging site: a commit is pushed to the 'Staging' branch
* Production site: a commit is pushed to the 'master' branch


