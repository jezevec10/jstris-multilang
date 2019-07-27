#/bin/bash

OUTPUT_DIR=$1
BASE_LANG="./en" #directory of the reference language

# create a directory for the output files
mkdir -p "$OUTPUT_DIR"
echo -n "" > "$OUTPUT_DIR"/jsons.txt
echo -n "" > "$OUTPUT_DIR"/index.md

for DIR in `find . -mindepth 1 -maxdepth 1 -type d -not -path '*/\.*' -a -not -path '*/\_*'| sort`
do
  #skip hidden directories and base language
  firstChar=${DIR:0:1}
  if [ "$DIR" = "$BASE_LANG" ]; then
    continue
  fi

  php ./_build/coverage.php "$BASE_LANG" "$DIR" >> "$OUTPUT_DIR"/jsons.txt

done


php ./_build/generateReport.php "$OUTPUT_DIR"/jsons.txt >> "$OUTPUT_DIR"/index.md
