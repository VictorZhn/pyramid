<?php

use Symfony\Component\Yaml\Yaml;

return Yaml::parse(file_get_contents('../config/'.$ymlName.'.yml'));
