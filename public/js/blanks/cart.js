var urlArray = window.location.pathname.split('/');
var patient_information;

$.ajax({
    type:'GET',
    url: '/api/cart/' + urlArray[2],
    dataType:'json',
    success: function(data) {
        useReturnData(data);
    },
    error: function (xhr, status, error) {
        toolTip(xhr.responseJSON.message);
    }
});

function useReturnData(data){
    patient_information = data;
};

$('#post-summer').summernote({
    lang: 'ru-RU',
    toolbar:[
        ['style',['style']],
        ['font',['bold','italic','underline','clear']],
        ['fontname',['fontname']],
        ['color',['color']],
        ['para',['ul','ol','paragraph']],
        ['height',['height']],
        ['table',['table']],
        ['insert',['media','link','hr']],
        ['view',['fullscreen','codeview']],
        ['misc', ['print']],
    ],
    tooltip: false,
    callbacks: {
        onInit: function(e) {
            $('.note-misc').children().addClass("button_print btn-doc").attr("data-print", "post");
        }
    }
});

$('#addPost').on('click', function (){
    if($('#post-summer').text().length <= 0){
        getTemplate()
    }
    $('#modalCenterPost').modal('show');
});

$('#templates').change(getTemplate);

$('#sendPost').on('click', function (){
    $.ajax({
        type: "POST",
        url: "/api/post",
        dataType: 'json',
        data: {
            "cart_id": urlArray[2],
            "post_name": $('#post-head_input').val(),
            "doctor_id": USERID,
            "post": $('#post-summer').summernote('code'),
        },
        success: function(msg){
            if(msg.status == true){
                $('#modalCenterPost').modal('hide');
                toolTip("Запись добавлена", 1);
                if($('#post-container').children('.post-item').length == 0){
                    $('#post-container').empty();
                }
                $('#post-container').append(`
                    <div class="row post-item" data-id="` + msg.post.id + `">
                         <div class="col-md-9">` + msg.post.post_name + `</div>
                         <div class="col-md-3 canter">` + msg.post.create_date + `</div>
                    </div>
                `)
            }
        },
        error: function (xhr, status, error) {
            toolTip(xhr.responseJSON.message);
        }
    });
});

$('#post-container').on('click', '.post-item' , function (){
    $('#modalCenterPostContent').modal('show');
    preLoad($('#modal-content-p'));
    $.ajax({
        type: "GET",
        url: "/api/post/" + $(this).attr('data-id'),
        dataType: 'json',
        success: function(msg){
            if(msg.status == true){
                $('#postName').text(msg.post.post_name);
                $('#postContent').html(msg.post.post);
                removePreLoader();
            }
        },
        error: function (xhr, status, error) {
            toolTip(xhr.responseJSON.message);
        }
    });
});

function getTemplate(){
    preLoad($('#modal-content-post'));
    $.ajax({
        type: "GET",
        url: "/api/template/"+$('#templates').val(),
        dataType: 'json',
        success: function(msg){
            if(msg.status == true){
                $('#post-head_input').val(msg.template.name);
                $('#post-summer').summernote('code', msg.template.template);
                fillTemplate();
                removePreLoader();
            }
        },
        error: function (xhr, status, error) {
            toolTip(xhr.responseJSON.message);
        }
    });
}

function fillTemplate(){
    var Data = new Date();
    var Year = Data.getFullYear();
    var Month = String(Data.getMonth() + 1).padStart(2, '0');
    var Day = String(Data.getDate()).padStart(2, '0');
    var Hour = Data.getHours();
    var Minutes = Data.getMinutes();

    $('#post-temp_id').text(patient_information.cart_id);
    $('#post-temp_name').text(patient_information.patient.name);
    $('#post-temp_date').text(Day + "." + Month + "." + Year);
    $('#post-temp_time').text(Hour + ":" + Minutes);
    $('#post-temp_born').text(patient_information.patient.born_date)
    $('#doc-name').text(USERNAME);
}

