<!-- 
Create a php script which demonstrates string function mentioned below:
○ addcslashes()
○ addslashes()
○ bin2hex()
○ chr()
○ chunk_split()
○ count_chars()
○ echo()
○ explode()
○ implode()
○ join()
○ lcfirst()
○ ltrim()
○ md5()
○ number_format()
○ ord()
○ parse_str()
○ print()
○ printf()
○ rtrim()
○ setlocale()
○ sha1()
○ str_pad()
○ str_repeat()
○ str_replace()
○ str_shuffle()
○ str_split()
○ str_word_count()
○ strcasecmp()
○ strchr()
○ strcmp()
○ strip_tags()
○ stripslashes()
○ stripos()
○ stristr()
○ strlen()
○ strnatcasecmp()
○ strnatcmp()
○ strncasecmp()
○ strncmp()
○ strpbrk()
○ strpos()
○ strrchr()
○ strrev()
○ strripos()
○ strrpos()
○ strstr()
○ strtolower()
○ strtoupper()
○ substr()
○ substr_count()
○ substr_replace()
○ trim()
 -->
<!-- In Problem 5: Write 2 functions from each columns of list. -->

<?php
// String functions
echo "String functions:\n";
echo "chr: " . chr(65) . "\n";
echo "explode: " . implode(" ", explode(" ", "Hello World")) . "\n";

// String functions rtrim
echo "rtrim: " . rtrim("Hello World", "d") . "\n";
echo "ltrim: " . ltrim("Hello World", "H") . "\n";
echo "length: " . strlen("Hello World") . "\n";

//
echo "strncmp()". strncmp("Hello World", "Hello", 5) . "\n";
echo "strnatcmp()". strnatcmp("Hello World", "Hello") . "\n";
echo "strtolower()". strtolower("Hello World") . "\n";

?>