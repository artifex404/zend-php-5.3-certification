<?php

// php and PHP are reserved names for namespaces
// namespace must be the first statement in the script

/*

can be declared:

namespace theName;

// the code of the namespace

/// OR 

namespace {
   // the code goes here
}

These 2 type of declaration cannot be mixed in a single file.

*/


namespace MyProject {

const CONNECT_OK = 1;
class Connection { /* ... */  }
function connect() { /* ... */  }

}

namespace AnotherProject {

const CONNECT_OK = 100;
class Connection { /* ... */  }
function connect() { /* ... */  }

}

namespace { // Global code

echo MyProject\CONNECT_OK; // Outputs: 1

}