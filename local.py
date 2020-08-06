import sys
from optparse import OptionParser
import os
import re
import string
#  HOW TO RUN this script - > type command below on command line or powershell while in same dir with git n local.py
#        "C:\Program Files (x86)\Microsoft Visual Studio\Shared\Anaconda3_64\python.exe" local.py

# MAKE thre four of thse scripts, one for one go from
# 1. onegofeaturetoprod
# 2. feature to release
# 3.  release to prod
# 4. release to prod plus tag

# usage = "Usage: %prog {options} [list of services to deploy]"
# parser = OptionParser(usage=usage)
#
# (options, args)= parser.parse_args()
#
# modules = [
#
# ]

from pygit2 import Repository
import sys

# main
# get the feature branch name
curr_branch_name = sys.argv[1]
release_branch_version_number = sys.argv[2]
tag_message = sys.argv[3]
# print 'Params=', param_1, param_2, param_3



FULL_DIR = os.getcwd()
os.chdir(FULL_DIR)
print("Changed directory")



#
# print("Current options are:"),
# print options
# print("Current options passed in are:"),
# print args

def run_command(cmd):
    # print("Executing: ") + cmd
    print("Running following command")
    print(cmd)
    return os.system(cmd)

def exit_on_failure_command(cmd):
    retval = run_command(cmd)
    print("Ran command")
    if retval !=0:
        print("Command: " + cmd + " failed with value: "),  retval
        sys.exit(retval)

def sync_master():

        os.chdir(FULL_DIR)
        url = "https://github.com/abylas/GitWorkflow.git"



        # repo = Repository('/path/to/your/git/repo')
        #
        # # option 1
        # head = repo.head
        # print("Head is " + head.name)
        #
        # # option 2
        # head = repo.lookup_reference('HEAD').resolve()
        # print("Head is " + head.name)

        # let's make this one for the whole commit and reflect on github, n then switch to develop
        # this includes, commit your branch, then merge to develop,then creage release n then merge to master.
        # next two should be, one that tags as well.
        # another that switches back to this branch for changes to be made again.

        # THIS ONE brings you back to develop only. not to feature branch
        # need a var config file, to keep track of version and tags and has options to store commit messages as
        # well to easily update notetub, and show

        # Incorporating a finished feature on develop - commit message
        #

        exit_on_failure_command("git checkout develop")
        print("Switched to develop successfully")
        exit_on_failure_command("git merge --no-ff " + curr_branch_name)
        print("Merged current feature branch to develop successfully")
        exit_on_failure_command("git push ava-github develop")
        print("Pushed MERGED develop branch to remote ava-github successfully")


        print ( "--2-dvelop-to-release-merge---------------" )
        exit_on_failure_command( "git checkout -b release-" + release_branch_version_number +" develop")
        print("Created a release Branch from Develop successfully")
        # BUMP VERSION number manunally in the release log for now, next step, commit this bumped up version

        # exit_on_failure_command("git commit -a -m \"Bumped version number to "  + release_branch_version_number + " \" ")
        # print("Bumped version number successfully")

        print("-------Finishing the release branch by merging with mster and tagging-----------")
        exit_on_failure_command("git checkout master")
        print("Checked out master branch successfully")
        exit_on_failure_command("git merge --no-ff release-" + release_branch_version_number)
        print("MERGED RELEASE branch with MASTER successfully")
        exit_on_failure_command("git tag -a " + release_branch_version_number + " -m \"" + tag_message+ "\"")
        print("Tagged successfully")

        #
        # exit_on_failure_command("git push --all origin")
        # print("Pushed all bracnhes successfully")
        exit_on_failure_command("git push --all ava-github")
        print("Pushed all branches successfully")
        exit_on_failure_command("git push ava-github --tags")
        print("Pushed all Tags successfully")


        # for module in modules:
        #     os.chdir(FULL_DIR)
        #     moduledetails = module[0].split("/")
        #     url = "https://github.com/"+ moduledetails[0] +"/"+ moduledetails[1] + ".git"
        #     exit_on_failure_command("git clone " + url)
        #     os.chdir(moduledetails[1])
        #     run_command("pwd")


try:
    sync_master()
except SystemExit as e:
    sys.exit(-1)










