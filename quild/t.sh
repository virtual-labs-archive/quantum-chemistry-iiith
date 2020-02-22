newfiles=`svn status | grep '?' | cut -c 8-`
for f in $newfiles; do svn add $f;done
