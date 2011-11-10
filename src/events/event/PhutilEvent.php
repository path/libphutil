<?php

/*
 * Copyright 2011 Facebook, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

class PhutilEvent {

  private $type;
  private $data;
  private $stop = false;

  public function __construct($type, array $data = array()) {
    $this->type = $type;
    $this->data = $data;
  }

  public function getType() {
    return $this->type;
  }

  public function getValue($key, $default = null) {
    return idx($this->data, $key, $default);
  }

  public function setValue($key, $value) {
    $this->data[$key] = $value;
    return $this;
  }

  public function stop() {
    $this->stop = true;
    return $this;
  }

  public function isStopped() {
    return $this->stop;
  }

}





