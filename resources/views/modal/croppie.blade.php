@section('croppie')
<link href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.min.css" rel="stylesheet">
    <div class="modal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        Обрезка изображения
                    </h5>
                    <button aria-label="Закрыть" class="btn-close" data-bs-dismiss="modal" type="button">
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        <div id="image-crop">
                        </div>
                    </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal" type="button">
                        Закрыть
                    </button>
                    <button class="btn btn-primary image-result" type="button">
                        Сохранить изменения
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.js">
    </script>
    <script type="text/javascript">
        $('input[name="image"]').attr("id", "image");

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $croppCrop = $('#image-crop').croppie({
            enableExif: true,
            viewport: {
                width: {{ $widthCropp??200 }},
                height: {{ $heightCropp??200 }},
                {!! isset($type)?"type:'$type',":'' !!}
            },
            boundary: {
                width: '95%',
                height: {{ ($heightCropp??250)+50 }},
            }
        });


        $('#image').on('change', function() {
          $('.modal').modal('show');

          var reader = new FileReader();
            reader.onload = function(e) {
                $croppCrop.croppie('bind', {
                    url: e.target.result
                }).then(function() {

                    console.log('jQuery bind complete');
                });
            }
            reader.readAsDataURL(this.files[0]);
        });

  $('.image-result').on('click', function(ev) {
            $croppCrop.croppie('result', {
                type: 'canvas',
                size: 'viewport'
            }).then(function(resp) {

                $('#blah').attr('src',resp);

                $('.modal').modal('hide');

              $('<input type="hidden" id="image_base64" name="image_base64" value="'+resp+'">').appendTo('#form');



            });
        });
{{--
//сохранение через ImageController
        // $('.image-result').on('click', function(ev) {
        //     $croppCrop.croppie('result', {
        //         type: 'canvas',
        //         size: 'viewport'
        //     }).then(function(resp) {

        //         $.ajax({
        //             url: "{{ route('imageCrop') }}",
        //             type: "POST",
        //             data: {
        //                 "image": resp
        //             },
        //             success: function(data) {

        //               $('#blah').attr('src', data.fileUrl);
        //               $('.modal').modal('hide');

        //               $('<input type="hidden" id="imagepath" name="imagepath" value="data.filePath">').appendTo('#form');

        //               $('#imagepath').val(data.filePath);
        //               $('#blah').attr('hidden',false);



        //             }
        //         });
        //     });
        // });
        --}}
    </script>
</link>