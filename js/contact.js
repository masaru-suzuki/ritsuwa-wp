'use strict';


/*================================================================
  リアルタイムバリデーション
================================================================ */
$(function() {
    function myViewModel() {
        var self = this;
        self.email = ko.observable().extend({
            required: {
                message: '必須項目です！'
            },
            email: {
                message: 'メールアドレスの記述が間違っています！'
            }
        });
    }

    ko.validation.init({
        insertMessages: true,
        errorElementClass: 'has-error'
    });
    var viewModel = ko.validatedObservable(new myViewModel());
    ko.applyBindings(viewModel);
})

// $('.target_name').attr("data-bind","value: text");
$('.target_email').attr("data-bind","value: email");
// $('.target_text').attr("data-bind","value: text");


const name = document.getElementById('your-name');
const mail = document.getElementById('your-mail');
const contents = document.getElementById('contents');
const agreement = document.getElementById('agreement-1');
console.log(name);
name.setAttribute('required', '');
mail.setAttribute('required', '');
contents.setAttribute('required', '');
agreement.setAttribute('required', '');
