s<?php if(!defined('KIRBY')) exit ?>

# default blueprint

title: Page
pages: true
  template: Year
files: false
fields:
  title: 
    label: Title
    type:  text
  longTitle: 
    label: Long Title
    type:  text  
  projectDate: 
    label: Project Date
    type:  text  
  text: 
    label: Text
    type:  textarea
    size:  large