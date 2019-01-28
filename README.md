IGHasher is a Command Line Application to get related hashtags from recent Instagram posts with a specific hashtag. Biilt with Laravel Zero and Instagram PHP Scraper.

------

# Documentation

##Installation

Requires PHP and composer.

Clone the repo `cd IGHasher` and run `composer install`


##Useage

All commands run from source folder as:

`php IGHasher get:(etc)`


###Get hashtags from hashtag

`get:hash [HASHTAG]`

To output to a file run with the --file option:

`get:hash [HASHTAG] --file="filename.txt"`

use `--file=auto` to automaticly output to "./output/[HASHTAG].txt"


a limit flag can be used to scrape more media (Default is 100):

`--limit=200`

###Get hastags from hashtags

`get:hashes [HASHTAG1] [HASHTAG2] [HASHTAG3]...`

This will search for each hashtag in turn, outputting them to files (as --filename=auto).
