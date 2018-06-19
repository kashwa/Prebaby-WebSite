//$('.article').find('.w3-container w3-white').find('.w3-row-padding').find('.w3-col m6 w3-light-grey  w3-card').find('a').eq(1).on('click', function () {
//   console.log('it works fine');
//});
$('#first').find('#second').find('#third').find('.edit').find('#btn').on('click', function () {
    $('#edit-modal').modal();
});

/**
 * I think i will not use that way,
 * searching for POLO way...
 */