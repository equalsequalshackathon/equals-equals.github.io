#!/bin/bash
static build
git add .build
printf "Please add a commit message: "
read msg
git commit -m "$msg"
git subtree push -f --prefix .build origin master
[ $? = 0 ] && echo "Upload successful!"
