'use strict';


/*================================================================
  バリデーション
================================================================ */


const name = document.getElementById('your-name');
const mail = document.getElementById('your-mail');
const contents = document.getElementById('contents');
const agreement = document.getElementById('agreement-1');
name.setAttribute('required', '');
mail.setAttribute('required', '');
contents.setAttribute('required', '');
agreement.setAttribute('required', '');
