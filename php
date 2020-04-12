preg_match_all("/(.*)\ (.*)\ ([0-9]{2}\:[0-9]{2}\:[0-9]{2})\ (.*)\ (.*)\[(.*)\]:\ Received\ disconnect\ from\ (.*)\:\ [0-9]{2}\:\ Bye\ Bye/i", $logContents, $matches, PREG_PATTERN_ORDER);
