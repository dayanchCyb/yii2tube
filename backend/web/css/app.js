

(function () {
   $('#videoFile').change(ev => {
       $(ev.target).close('form').trigger('submit');
   })

});