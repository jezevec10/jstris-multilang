#/bin/bash

for DIR in `find . -mindepth 1 -type d`
do
  #skip _directories
  firstChar=${DIR:0:1}
  if [ "$firstChar" = "_" ]; then
    continue
  fi

  LANGFILES=`find "$DIR" -type f -name '*.php'`
  for FILE in $LANGFILES; do
    if php "$FILE"; then
      echo "OK - $FILE"
    else
      echo "PHP_ERROR - $FILE"
      exit 1
    fi
  done
done
