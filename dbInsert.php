<?php

$mongo = new MongoClient();
$db = $mongo->wyd;
$collection = $db->test2;

$name = "hzw8";
$doc = '{
	"name" : $name,
	"one_w" : {
        "Mon" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Tues" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Wed" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Thur" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Fri" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        }
    },
    "two_w" : {
        "Mon" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Tues" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Wed" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Thur" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Fri" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        }
    },
    "three_w" : {
        "Mon" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Tues" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Wed" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Thur" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Fri" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        }
    },
    "four_w" : {
        "Mon" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Tues" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Wed" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Thur" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Fri" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        }
    },
    "five_w" : {
        "Mon" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Tues" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Wed" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Thur" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Fri" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        }
    },
    "six_w" : {
        "Mon" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Tues" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Wed" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Thur" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Fri" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        }
    },
    "seven_w" : {
        "Mon" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Tues" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Wed" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Thur" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Fri" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        }
    },
    "eight_w" : {
        "Mon" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Tues" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Wed" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Thur" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Fri" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        }
    },
    "nine_w" : {
        "Mon" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Tues" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Wed" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Thur" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Fri" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        }
    },
    "ten_w" : {
        "Mon" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Tues" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Wed" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Thur" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Fri" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        }
    },
    "eleven_w" : {
        "Mon" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Tues" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Wed" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Thur" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Fri" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        }
    },
    "twelve_w" : {
        "Mon" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Tues" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Wed" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Thur" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Fri" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        }
    },
    "thirteen_w" : {
        "Mon" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Tues" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Wed" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Thur" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Fri" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        }
    },
    "fourteen_w" : {
        "Mon" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Tues" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Wed" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Thur" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Fri" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        }
    },
    "fifteen_w" : {
        "Mon" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Tues" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Wed" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Thur" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Fri" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        }
    },
    "sixteen_w" : {
        "Mon" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Tues" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Wed" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Thur" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Fri" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        }
    },
    "seventeen_w" : {
        "Mon" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Tues" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Wed" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Thur" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Fri" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        }
    },
    "eighteen_w" : {
        "Mon" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Tues" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Wed" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Thur" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Fri" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        }
    },
    "nineteen_w" : {
        "Mon" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Tues" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Wed" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Thur" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Fri" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        }
    },
    "twenty_w" : {
        "Mon" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Tues" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Wed" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Thur" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        },
        "Fri" : {
            "first" : true,
            "second" : true,
            "thrid" : true,
            "fourth" : false
        }
    }
	}';


$docArr = json_decode($doc);
$collection->insert($docArr);
echo "ok";

