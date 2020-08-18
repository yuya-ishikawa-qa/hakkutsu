<?php

return [
  '400' => [
    'title'   => '400 Bad Request',
    'message' => 'There is an error in the request.',
    'detail'  => 'This response indicates that the server can not understand the request because the syntax is invalid.',
  ],
  '401' => [
    'title'   => '401 Unauthorized',
    'message' => 'certification failed.',
    'detail'  => 'Authentication is required to obtain the requested resource.',
  ],
  '403' => [
    'title'   => '403 Forbidden',
    'message' => 'You do not have access.',
    'detail'  => 'It indicates that the client does not have access to the content and the server is refusing to reply the appropriate response.',
  ],
  '404' => [
    'title'   => '404 Not Found',
    'message' => 'The page of the corresponding address could not be found.',
    'detail'  => 'The server indicates that it could not find the requested resource. A typo in the URL, or the page may have been moved or deleted. Please go back to the top page or search again.',
  ],
  '500' => [
    'title'   => '500 Internal Server Error',
    'message' => 'An error occurred inside the server.',
    'detail'  => 'It will be returned when there is a syntax error in the program, or there is an error in the setting. Please contact the administrator.',
  ],
  '503' => [
    'title'   => '503 Service Unavailable',
    'message' => 'You can not access this page due to circumstances.',
    'detail'  => 'Service is temporarily unusable due to overload or maintenance.',
  ],
];
