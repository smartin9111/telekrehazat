@extends('admin.admin_dashboard')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <div class="page-content">


        <div class="row profile-body">
            <!-- left wrapper start -->

            <!-- left wrapper end -->
            <!-- middle wrapper start -->
            <div class="col-md-12 col-xl-12 middle-wrapper">
                <div class="row">

                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Új típusterv </h6>
                            <form method="post" action="{{ route('store.property') }}" id="myForm"
                                enctype="multipart/form-data">
                                @csrf


                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Típusterv Neve </label>
                                            <input type="text" name="typePlanName" class="form-control">
                                        </div>
                                    </div><!-- Col -->



                                    <div class="col-sm-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Netto Ár</label>
                                            <input type="number" name="priceNet" class="form-control">
                                        </div>
                                    </div><!-- Col -->


                                    <div class="col-sm-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Bruttó Ár </label>
                                            <input type="number" name="priceGross" class="form-control">
                                        </div>
                                    </div><!-- Col -->


                                    <div class="col-sm-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Main Thambnail </label>
                                            <input type="file" name="property_thambnail" class="form-control"
                                                onChange="mainThamUrl(this)">
                                            <img src="" id="mainThmb">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Multiple Image </label>
                                            <input type="file" name="multi_img[]" class="form-control" id="multiImg"
                                                multiple="">

                                            <div class="row" id="preview_img"> </div>
                                        </div>
                                    </div><!-- Col -->
                                </div><!-- Row -->
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="mb-3">
                                            <label class="form-label">Alaprajz neve </label>
                                            <input type="text" name="floorMap" class="form-control">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-3">
                                        <div class="mb-3">
                                            <label class="form-label">Hasznos alapterület</label>
                                            <input type="text" name="useFullArea" class="form-control">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-3">
                                        <div class="mb-3">
                                            <label class="form-label">Szintek száma</label>
                                            <input type="number" name="floors" class="form-control">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-3">
                                        <div class="mb-3">
                                            <label class="form-label">Szobák száma</label>
                                            <input type="number" name="rooms" class="form-control">
                                        </div>
                                    </div><!-- Col -->
                                </div><!-- Row -->
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="mb-3">
                                            <label class="form-label">Fürdőszobák száma</label>
                                            <input type="number" name="bathrooms" class="form-control">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-3">
                                        <div class="mb-3">
                                            <label class="form-label">Terasz mérete</label>
                                            <input type="number" name="terraceSize" class="form-control">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-3">
                                        <div class="mb-3">
                                            <label class="form-label">Belmagasság</label>
                                            <input type="number" name="innerHeight" class="form-control">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-3">
                                        <div class="mb-3">
                                            <label class="form-label">Terv típusa</label>
                                            <input type="text" name="planType" class="form-control">
                                        </div>
                                    </div><!-- Col -->
                                </div><!-- Row -->
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label class="form-label">Megközelíthetőség (akadálymentes vagy nem)</label>
                                            <select name="accessibility" class="form-select"
                                                id="exampleFormControlSelect1">
                                                <option selected="" disabled="">Megközelíthetőség</option>
                                                <option value="yes">akadálymentes</option>
                                                <option value="no">Nem akadálymentes</option>
                                            </select>
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label class="form-label">Kivietelezési idő</label>
                                            <input type="text" name="executionTime" class="form-control">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label class="form-label">Készültségi szint (szerkezetkészen, emelt
                                                szerkezetkészen, kulcsrakészen, prémium
                                                kulcsrakészen)</label>
                                            <select name="levelOfPreparation" class="form-select"
                                                id="exampleFormControlSelect1">
                                                <option selected="" disabled="">Készültségi szint</option>
                                                <option value="szerkezetkeszen">Szerkezetkészen</option>
                                                <option value="emelt_szerkezetkesze">Emelt szerkezetkészen</option>
                                                <option value="kulcsrakesze">Kulcsrakészen</option>
                                                <option value="premium_kulcsrakeszen">Prémium kulcsrakészen</option>
                                            </select>
                                        </div>
                                    </div><!-- Col -->
                                </div><!-- Row -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label">Falazat típusa (lenyíló clt sip fa ytong tégla liapor
                                                fém gerenda)</label>
                                            <select name="wallType" class="form-select" id="exampleFormControlSelect1">
                                                <option selected="" disabled="">Falazat típusa</option>
                                                <option value="lenyilo">Lenyíló</option>
                                                <option value="clt">CLT</option>
                                                <option value="sip">SIP</option>
                                                <option value="fa">Fa</option>
                                                <option value="ytong">Ytong</option>
                                                <option value="tegla">Tégla</option>
                                                <option value="liapor">Liapor</option>
                                                <option value="fem">Fém</option>
                                                <option value="gerenda">Gerenda</option>
                                            </select>
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label">Alap (lenyíló sáv lemez talajcsavar)</label>
                                            <select name="foundation" class="form-select" id="exampleFormControlSelect1">
                                                <option selected="" disabled="">Alap</option>
                                                <option value="lenyilo_sav">Sáv</option>
                                                <option value="lemez">Lemez</option>
                                                <option value="talajcsavar">Talajcsavar</option>
                                            </select>
                                        </div>
                                    </div><!-- Col -->
                                </div><!-- Row -->
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label class="form-label">Fűtés típusa </label>
                                            <select name="heatingType" class="form-select"
                                                id="exampleFormControlSelect1">
                                                <option selected="" disabled="">Fűtés típusa</option>
                                                <option value="levego_levego">Levegő-levegő</option>
                                                <option value="levego_viz">Levegő-víz</option>
                                                <option value="hoszivattyu">Hőszivattyú</option>
                                                <option value="padlofutes">Padlófűtés</option>
                                                <option value="menyezetfutes">Mennyezetfűtés</option>
                                                <option value="futopanel">Fűtőpanel</option>
                                                <option value="radiator">Radiátor</option>
                                                <option value="kalyha">Kályha</option>
                                                <option value="kazan">Kazán</option>
                                                <option value="klima">Klíma</option>
                                            </select>
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label class="form-label">Fűtés energia ellátása</label>
                                            <select name="heatingEnergySupply" class="form-select"
                                                id="exampleFormControlSelect1">
                                                <option selected="" disabled="">Fűtés energia ellátása</option>
                                                <option value="gaz">Gáz</option>
                                                <option value="aram">Áram</option>
                                                <option value="fa">Fa</option>
                                                <option value="hoszivattyu">Hőszivattyú</option>
                                                <option value="geotermikus">Geotermikus</option>
                                                <option value="napelem">Napelem</option>
                                            </select>
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label class="form-label">Hűtés típusa</label>
                                            <select name="coolingType" class="form-select"
                                                id="exampleFormControlSelect1">
                                                <option selected="" disabled="">Fűtés energia ellátása</option>
                                                <option value="lenyilo_sav">Lenyíló</option>
                                                <option value="lemez">Klíma</option>
                                                <option value="hoszivattyu">Hőszivattyú</option>
                                                <option value="mennyezet_hutes">Mennyezet hűtés</option>
                                                <option value="geotermikus">Geotermikus</option>
                                                <option value="napelem">Napelem</option>
                                            </select>
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label">Megújuló energia</label>
                                            <select name="renewableEnergy" class="form-select"
                                                id="exampleFormControlSelect1">
                                                <option selected="" disabled="">Megújuló energia</option>
                                                <option value="napelem">Napelem</option>
                                                <option value="hosivattyu">Hőszivattyú</option>
                                                <option value="geoterm">Geoterm</option>
                                                <option value="egyeb">Egyéb</option>

                                            </select>
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label">Energetikai besorolás</label>
                                            <input type="text" name="energeticClassification" class="form-control">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label">Partner Neve</label>
                                            <input type="text" name="partnerName" class="form-control">
                                        </div>
                                    </div><!-- Col -->
                                    <!-- Col -->
                                </div><!-- Row -->
                                <div class="col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label">Short Description</label>
                                        <textarea name="short_description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                </div><!-- Col -->



                                <hr>


                                <button type="submit" class="btn btn-primary">Save Changes </button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#myForm').validate({
                rules: {
                    typePlanName: {
                        required: true,
                    },
                    property_status: {
                        required: true,
                    },
                    lowest_price: {
                        required: true,
                    },
                    max_price: {
                        required: true,
                    },
                    ptype_id: {
                        required: true,
                    },


                },
                messages: {
                    typePlanName: {
                        required: 'Please Enter Type Plan Name',
                    },
                    property_status: {
                        required: 'Please Select Property Status',
                    },
                    lowest_price: {
                        required: 'Please Enter Lowest Price',
                    },
                    max_price: {
                        required: 'Please Enter Max Price',
                    },
                    ptype_id: {
                        required: 'Please Select Property Type',
                    },

                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                },
            });
        });
    </script>
    <script type="text/javascript">
        function mainThamUrl(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#mainThmb').attr('src', e.target.result).width(80).height(80);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <script>
        $(document).ready(function() {
            $('#multiImg').on('change', function() { //on file input change
                if (window.File && window.FileReader && window.FileList && window
                    .Blob) //check File API supported browser
                {
                    var data = $(this)[0].files; //this file data

                    $.each(data, function(index, file) { //loop though each file
                        if (/(\.|\/)(gif|jpe?g|png|webp)$/i.test(file
                                .type)) { //check supported file type
                            var fRead = new FileReader(); //new filereader
                            fRead.onload = (function(file) { //trigger function on successful read
                                return function(e) {
                                    var img = $('<img/>').addClass('thumb').attr('src',
                                            e.target.result).width(100)
                                        .height(80); //create image element
                                    $('#preview_img').append(
                                        img); //append image to output element
                                };
                            })(file);
                            fRead.readAsDataURL(file); //URL representing the file's data.
                        }
                    });

                } else {
                    alert("Your browser doesn't support File API!"); //if File API is absent
                }
            });
        });
    </script>
@endsection
