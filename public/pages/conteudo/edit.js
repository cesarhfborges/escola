$(document).ready(function () {
    var player = videojs('my-video', {
        controls: true,
        pictureInPicture: false,
        autoplay: true,
        preload: "auto",
        loop: false,
        "playbackRates": [1, 1.5, 2],
        "aspectRatio":"640:267",
        controlBar: {
            muteToggle: false
        },
    });

    player.watermark({
        file: document.querySelector('link[rel="icon"]').href,
        xpos: 100,
        ypos: 0,
        xrepeat: 0,
        opacity: .2,
        clickable: false,
        url: document.querySelector('link[rel="canonical"]').href,
        className: 'vjs-watermark',
        text: false,
        debug: false
    });

    $(function(){
        var $refreshButton = $('#refresh');
        var $results = $('#css_result');

        function refresh(){
            var css = $('style.cp-pen-styles').text();
            $results.html(css);
        }

        refresh();
        $refreshButton.click(refresh);

        // Select all the contents when clicked
        $results.click(function(){
            $(this).select();
        });
    });

    $('select#tiposelect').on('changed.bs.select', function (e, clickedIndex, isSelected, previousValue) {
        let opcao = $(this).children("option:selected").val();
        let content = '';
        let divUpload = $('#divUpload');
        switch (opcao) {
            case 'pdf':
                content = '<label>Arquivo/Url</label><div class="custom-file border rounded">' +
                    '<input type="file" class="custom-file-input" id="customFile" accept="application/pdf">' +
                    '<label id="custom-file-label" class="custom-file-label mt-1" for="customFile">Escolher arquivo</label>' +
                    '</div>';
                break;
            case 'imagem':
                content = '<label>Arquivo/Url</label><div class="custom-file border rounded">' +
                    '<input type="file" class="custom-file-input" id="customFile" accept="image/*">' +
                    '<label id="custom-file-label" class="custom-file-label mt-1" for="customFile">Escolher arquivo</label>' +
                    '</div>';
                break;
            case 'video':
                content = '<label>Arquivo/Url</label><div class="custom-file border rounded">' +
                    '<input type="file" class="custom-file-input" id="customFile" accept="video/mp4,video/x-m4v,video/*">' +
                    '<label id="custom-file-label" class="custom-file-label mt-1" for="customFile">Escolher arquivo</label>' +
                    '</div>';
                break;
            case 'audio':
                content = '<label>Arquivo/Url</label><div class="custom-file border rounded">' +
                    '<input type="file" class="custom-file-input" id="customFile" accept="audio/*">' +
                    '<label id="custom-file-label" class="custom-file-label mt-1" for="customFile">Escolher arquivo</label>' +
                    '</div>';
                break;
            case 'iframe':
                content = '<label class="bmd-label-static">Arquivo/Url</label><input type="text" class="form-control" name="valor" id="valor" value="">';
                break;
            case 'url':
                content = '<label class="bmd-label-static">Arquivo/Url</label><input type="url" class="form-control" name="valor" id="valor" value="">';
                break;
            case 'youtube':
                content = '<label class="bmd-label-static">Link do Video</label><input type="url" class="form-control" name="valor" id="valor" value="">';
                break;
            case 'nenhum':
                content = '';
                break;
        }
        divUpload.empty().append(content);
        // console.log('teste');
    });

    $("#customFile").on("change", function() {
        let fileName = $(this).val().split("\\").pop();
        $('#custom-file-label').addClass('selected').html(fileName);
        // $(this).siblings("#custom-file-label").addClass("selected").html(fileName);
    });

    let toolbarOptions = {
        container: [
            [{ 'font': [] }],
            [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
            ['bold', 'italic', 'underline', 'strike'],
            ['blockquote', 'code-block'],
            [{ 'list': 'ordered' }, { 'list': 'bullet' }],
            [{ 'script': 'sub' }, { 'script': 'super' }],
            [{ 'indent': '-1' }, { 'indent': '+1' }],
            [{ 'color': [] }, { 'background': [] }],
            [{ 'align': [] }],
            // ['link', 'image', 'video'],
            ['emoji'],
            ['clean'],
        ],
        handlers: {
            'emoji': function () {}
        }
    };
    let quill = new Quill('#quill-editor', {
        modules: {
            "toolbar": toolbarOptions,
            "emoji-toolbar": true,
            "emoji-shortname": true,
            "emoji-textarea": false,
            history: {
                delay: 2000,
                maxStack: 500,
                userOnly: true
            }
        },
        placeholder: 'Descrição',
        theme: 'snow',
    });

    $('[data-fancybox]').fancybox({
        toolbar  : false,
        smallBtn : true,
        buttons: [
            "zoom",
            //"share",
            "slideShow",
            //"fullScreen",
            //"download",
            "thumbs",
            "close"
        ],
        scrolling: 'no',
        'transitionIn'  : 'elastic',
        'transitionOut' : 'elastic',
        iframe : {
            preload : false
        }
    });

    $('a.embed').gdocsViewer();


    quill.root.innerHTML = $('#descricao').val();

    quill.on('text-change', function(delta, oldDelta, source) {
        $('#descricao').val(quill.root.innerHTML);
        // $(this).height(self.editor.root.ownerDocument.body.scrollHeight);
    });

    $('input[name="titulo"]').change(function (e) {
        $('#preview-titulo').html('<h3 class="font-weight-bold m-0">'+$(this).val()+'</h3>')
    });

    $('input[name="modulo"]').change(function (e) {
        $('#preview-modulo').html('<p class="p-0 text-secondary">'+$(this).val()+'</p>')
    });
});
