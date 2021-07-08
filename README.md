# millco-diceware
An opinionated tool to create pass phrases.

I needed a list of passwords that matched the password requirements for ProcessWire when importing users from another CMS and didn't find anything suitable.

It's probably not for you if you're a secret government agency but it's probably reasonable for most of us and it's come in handy on 

The word list was initially based on the medium and long word lists from  https://github.com/first20hours/google-10000-english along with word lists from other sources but has been tweaked to remove American brand names and any words that might not be suitable in a pass phase (let me know if you come across anything that should be taken out).

You should probably check the https://github.com/first20hours/google-10000-english licence if you're planning on using this list in your commercial project.

The word list is of course horribly Anglo-centric but that's what I needed.

There's a simple online version of the tool at https://millipedia.com/millco-diceware/ or you can just download this repository and run it locally.

You can also run the password generator as a php script from the command line:


    php dice.php

