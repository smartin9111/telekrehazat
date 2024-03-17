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
                            <form method="post" action="{{ route('update.property') }}" id="myForm"
                                enctype="multipart/form-data">
                                @csrf


                                <input type="hidden" name="id" value="{{ $property->id }}">

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Típusterv Neve </label>
                                            <input type="text" name="typePlanName" class="form-control"
                                                value="{{ $property->typePlanName }}">
                                        </div>
                                    </div><!-- Col -->



                                    <div class="col-sm-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Netto Ár</label>
                                            <input type="number" name="priceNet" class="form-control"
                                                value="{{ $property->priceNet }}">
                                        </div>
                                    </div><!-- Col -->


                                    <div class="col-sm-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Bruttó Ár </label>
                                            <input type="number" name="priceGross" class="form-control"
                                                value="{{ $property->priceGross }}">
                                        </div>
                                    </div><!-- Col -->

                                </div><!-- Row -->
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="mb-3">
                                            <label class="form-label">Alaprajz neve </label>
                                            <input type="text" name="floorMap" class="form-control"
                                                value="{{ $property->floorMap }}">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-3">
                                        <div class="mb-3">
                                            <label class="form-label">Hasznos alapterület</label>
                                            <input type="text" name="useFullArea" class="form-control"
                                                value="{{ $property->useFullArea }}">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-3">
                                        <div class="mb-3">
                                            <label class="form-label">Szintek száma</label>
                                            <input type="text" name="floors" class="form-control"
                                                value="{{ $property->floors }}">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-3">
                                        <div class="mb-3">
                                            <label class="form-label">Szobák száma</label>
                                            <input type="number" name="rooms" class="form-control"
                                                value="{{ $property->rooms }}">
                                        </div>
                                    </div><!-- Col -->
                                </div><!-- Row -->
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="mb-3">
                                            <label class="form-label">Fürdőszobák száma</label>
                                            <input type="text" name="bathrooms"
                                                class="form-control"value="{{ $property->bathrooms }}">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-3">
                                        <div class="mb-3">
                                            <label class="form-label">Terasz mérete</label>
                                            <input type="number" name="terraceSize"
                                                class="form-control"value="{{ $property->terraceSize }}">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-3">
                                        <div class="mb-3">
                                            <label class="form-label">Belmagasság</label>
                                            <input type="number" name="innerHeight"
                                                class="form-control"value="{{ $property->innerHeight }}">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-3">
                                        <div class="mb-3">
                                            <label class="form-label">Terv típusa</label>
                                            <input type="text" name="planType"
                                                class="form-control"value="{{ $property->planType }}">
                                        </div>
                                    </div><!-- Col -->
                                </div><!-- Row -->
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label class="form-label">Megközelíthetőség</label>
                                            <select name="accessibility" class="form-select" id="exampleFormControlSelect1">
                                                <option disabled="">Megközelíthetőség</option>
                                                <option value="yes"
                                                    {{ $property->accessibility == 'igen' ? 'selected' : '' }}>
                                                    akadálymentes
                                                </option>
                                                <option value="no"
                                                    {{ $property->accessibility == 'nem' ? 'selected' : '' }}>Nem
                                                    akadálymentes</option>
                                            </select>
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label class="form-label">Kivietelezési idő</label>
                                            <input type="text" name="executionTime"
                                                class="form-control"value="{{ $property->executionTime }}">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label class="form-label">Készültségi szint</label>
                                            <select name="levelOfPreparation" class="form-select"
                                                id="exampleFormControlSelect1">
                                                <option disabled="">Készültségi szint</option>
                                                <option value="szerkezetkészen"
                                                    {{ $property->levelOfPreparation == 'szerkezetkészen' ? 'selected' : '' }}>
                                                    Szerkezetkészen</option>
                                                <option value="emelt szerkezetkészen"
                                                    {{ $property->levelOfPreparation == 'emelt szerkezetkészen' ? 'selected' : '' }}>
                                                    Emelt szerkezetkészen</option>
                                                <option value="kulcsrakészen"
                                                    {{ $property->levelOfPreparation == 'kulcsrakészen' ? 'selected' : '' }}>
                                                    Kulcsrakészen</option>
                                                <option value="prémium kulcsrakészen"
                                                    {{ $property->levelOfPreparation == 'prémium kulcsrakészen' ? 'selected' : '' }}>
                                                    Prémium kulcsrakészen</option>
                                            </select>
                                        </div>

                                    </div><!-- Col -->
                                </div><!-- Row -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label">Falazat típusa</label>
                                            <select name="wallType" class="form-select" id="exampleFormControlSelect1">
                                                <option disabled="">Falazat típusa</option>
                                                <option value="clt"
                                                    {{ $property->wallType == 'clt' ? 'selected' : '' }}>CLT</option>
                                                <option value="sip"
                                                    {{ $property->wallType == 'sip' ? 'selected' : '' }}>SIP</option>
                                                <option value="fa"
                                                    {{ $property->wallType == 'fa' ? 'selected' : '' }}>Fa</option>
                                                <option value="ytong"
                                                    {{ $property->wallType == 'ytong' ? 'selected' : '' }}>Ytong</option>
                                                <option value="tégla"
                                                    {{ $property->wallType == 'tégla' ? 'selected' : '' }}>Tégla</option>
                                                <option value="liapor"
                                                    {{ $property->wallType == 'liapor' ? 'selected' : '' }}>Liapor</option>
                                                <option value="fém"
                                                    {{ $property->wallType == 'fém' ? 'selected' : '' }}>Fém</option>
                                                <option value="gerenda"
                                                    {{ $property->wallType == 'gerenda' ? 'selected' : '' }}>Gerenda
                                                </option>
                                            </select>
                                        </div>

                                    </div><!-- Col -->
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label">Alap</label>
                                            <select name="foundation" class="form-select" id="exampleFormControlSelect1">
                                                <option disabled="">Alap</option>
                                                <option value="sáv"
                                                    {{ $property->foundation == 'sáv' ? 'selected' : '' }}>Sáv</option>
                                                <option value="lemez"
                                                    {{ $property->foundation == 'lemez' ? 'selected' : '' }}>Lemez</option>
                                                <option value="nincs"
                                                    {{ $property->foundation == 'nincs' ? 'selected' : '' }}>Nincs</option>
                                                <option value="talajcsavar"
                                                    {{ $property->foundation == 'talajcsavar' ? 'selected' : '' }}>
                                                    Talajcsavar</option>
                                            </select>
                                        </div>

                                    </div><!-- Col -->
                                </div><!-- Row -->
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label class="form-label">Fűtés típusa</label>
                                            <select name="heatingType" class="form-select"
                                                id="exampleFormControlSelect1">
                                                <option disabled="">Fűtés típusa</option>
                                                <option value="levegő-levegő"
                                                    {{ $property->heatingType == 'levegő-levegő' ? 'selected' : '' }}>
                                                    Levegő-levegő</option>
                                                <option value="levegő-víz"
                                                    {{ $property->heatingType == 'levegő-víz' ? 'selected' : '' }}>
                                                    Levegő-víz</option>
                                                <option value="hőszivattyú"
                                                    {{ $property->heatingType == 'hőszivattyú' ? 'selected' : '' }}>
                                                    Hőszivattyú</option>
                                                <option value="padlófűtes"
                                                    {{ $property->heatingType == 'padlófűtes' ? 'selected' : '' }}>
                                                    Padlófűtés</option>
                                                <option value="mennyezetfűtes"
                                                    {{ $property->heatingType == 'mennyezetfűtes' ? 'selected' : '' }}>
                                                    Mennyezetfűtés</option>
                                                <option value="fűtőpanel"
                                                    {{ $property->heatingType == 'fűtőpanel' ? 'selected' : '' }}>Fűtőpanel
                                                </option>
                                                <option value="radiátor"
                                                    {{ $property->heatingType == 'radiátor' ? 'selected' : '' }}>Radiátor
                                                </option>
                                                <option value="kályha"
                                                    {{ $property->heatingType == 'kályha' ? 'selected' : '' }}>Kályha
                                                </option>
                                                <option value="kazán"
                                                    {{ $property->heatingType == 'kazán' ? 'selected' : '' }}>Kazán
                                                </option>
                                                <option value="klíma"
                                                    {{ $property->heatingType == 'klíma' ? 'selected' : '' }}>Klíma
                                                </option>
                                                <option value="nincs"
                                                    {{ $property->heatingType == 'nincs' ? 'selected' : '' }}>Nincs
                                                </option>
                                            </select>
                                        </div>

                                    </div><!-- Col -->
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label class="form-label">Fűtés energia ellátása</label>
                                            <select name="heatingEnergySupply" class="form-select"
                                                id="exampleFormControlSelect1">
                                                <option disabled="">Fűtés energia ellátása</option>
                                                <option value="gáz"
                                                    {{ $property->heatingEnergySupply == 'gáz' ? 'selected' : '' }}>Gáz
                                                </option>
                                                <option value="áram"
                                                    {{ $property->heatingEnergySupply == 'áram' ? 'selected' : '' }}>Áram
                                                </option>
                                                <option value="fa"
                                                    {{ $property->heatingEnergySupply == 'fa' ? 'selected' : '' }}>Fa
                                                </option>
                                                <option value="hőszivattyú"
                                                    {{ $property->heatingEnergySupply == 'hőszivattyú' ? 'selected' : '' }}>
                                                    Hőszivattyú</option>
                                                <option value="geotermikus"
                                                    {{ $property->heatingEnergySupply == 'geotermikus' ? 'selected' : '' }}>
                                                    Geotermikus</option>
                                                <option value="napelem"
                                                    {{ $property->heatingEnergySupply == 'napelem' ? 'selected' : '' }}>
                                                    Napelem</option>
                                                <option value="nincs"
                                                    {{ $property->heatingEnergySupply == 'nincs' ? 'selected' : '' }}>Nincs
                                                </option>
                                            </select>
                                        </div>

                                    </div><!-- Col -->
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label class="form-label">Hűtés típusa</label>
                                            <select name="coolingType" class="form-select" id="coolingType">
                                                <option disabled="">Hűtés típusa</option>
                                                <option value="klíma"
                                                    {{ $property->coolingType == 'klíma' ? 'selected' : '' }}>Klíma
                                                </option>
                                                <option value="hőszivattyú"
                                                    {{ $property->coolingType == 'hőszivattyú' ? 'selected' : '' }}>
                                                    Hőszivattyú</option>
                                                <option value="mennyezethűtés"
                                                    {{ $property->coolingType == 'mennyezethűtés' ? 'selected' : '' }}>
                                                    Mennyezet hűtés</option>
                                                <option value="geotermikus"
                                                    {{ $property->coolingType == 'geotermikus' ? 'selected' : '' }}>
                                                    Geotermikus</option>
                                                <option value="napelem"
                                                    {{ $property->coolingType == 'napelem' ? 'selected' : '' }}>Napelem
                                                </option>
                                                <option value="nincs"
                                                    {{ $property->coolingType == 'nincs' ? 'selected' : '' }}>Nincs
                                                </option>
                                            </select>
                                        </div>

                                    </div><!-- Col -->
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label">Megújuló energia</label>
                                            <select name="renewableEnergy" class="form-select"
                                                id="exampleFormControlSelect1">
                                                <option disabled="">Megújuló energia</option>
                                                <option value="napelem"
                                                    {{ $property->renewableEnergy == 'napelem' ? 'selected' : '' }}>Napelem
                                                </option>
                                                <option value="hőszivattyú"
                                                    {{ $property->renewableEnergy == 'hőszivattyú' ? 'selected' : '' }}>
                                                    Hőszivattyú</option>
                                                <option value="geoterm"
                                                    {{ $property->renewableEnergy == 'geoterm' ? 'selected' : '' }}>Geoterm
                                                </option>
                                                <option value="egyeb"
                                                    {{ $property->renewableEnergy == 'egyéb' ? 'selected' : '' }}>Egyéb
                                                </option>
                                                <option value="nincs"
                                                    {{ $property->renewableEnergy == 'nincs' ? 'selected' : '' }}>Nincs
                                                </option>
                                            </select>
                                        </div>

                                    </div><!-- Col -->
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label">Energetikai
                                                besorolás</label>
                                            <input type="text" name="energeticClassification"
                                                class="form-control"value="{{ $property->energeticClassification }}">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label">Partner Neve</label>
                                            <input type="text" name="company_name" class="form-control"
                                                value="{{ $property->company_name }}">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label">Partner Link</label>
                                            <input type="text" name="company_link" class="form-control"
                                                value="{{ $property->company_link }}">
                                        </div>
                                    </div><!-- Col -->
                                    <!-- Col -->
                                </div><!-- Row -->
                                <div class="col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label">Long Description</label>
                                        <textarea class="form-control" name="short_description" id="tinymceExample" rows="10">
										{!! $property->short_description !!}
									</textarea>

                                    </div>
                                </div><!-- Col -->

                                <div class="mb-3">
                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" name="featured" value="1" class="form-check-input"
                                            id="checkInline1" {{ $property->featured == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="checkInline1">
                                            Features Property
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- Col -->
                                    <div class="col-sm-4">
                                        <div class="mb-4">
                                            <label class="form-label">Ár érvényes</label>
                                            <input type="text" name="priceAvailable"
                                                class="form-control"value="{{ $property->priceAvailable }}">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-4">
                                        <div class="mb-4">
                                            <label class="form-label">Telefonszám</label>
                                            <input type="text" name="telephone"
                                                class="form-control"value="{{ $property->telephone }}">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-4">
                                        <div class="mb-4">
                                            <label class="form-label">Céges email</label>
                                            <input type="text" name="email"
                                                class="form-control"value="{{ $property->email }}">
                                        </div>
                                    </div><!-- Col -->
                                </div>


                                <hr>


                                <button type="submit" class="btn btn-primary">Save Changes </button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  /// Property Main Thambnail Image Update //// -->

    <div class="page-content" style="margin-top: -35px;">

        <div class="row profile-body">
            <div class="col-md-12 col-xl-12 middle-wrapper">
                <div class="row">

                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Edit Main Thambnail Image </h6>


                            <form method="post" action="{{ route('update.property.thambnail') }}" id="myForm"
                                enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="id" value="{{ $property->id }}">
                                <input type="hidden" name="old_img" value="{{ $property->property_thambnail }}">

                                <div class="row mb-3">
                                    <div class="form-group col-md-6">
                                        <label class="form-label">Edit Main Thambnail Image</label>
                                        <input type="file" name="property_thambnail" class="form-control"
                                            onChange="mainThamUrl(this)">

                                        <img src="" id="mainThmb">

                                    </div>


                                    <div class="form-group col-md-6">
                                        <label class="form-label"> </label>
                                        <img src="{{ asset($property->property_thambnail) }}"
                                            style="width:100px; height:100px;">
                                    </div>
                                </div><!-- Col -->

                                <button type="submit" class="btn btn-primary">Save Changes </button>


                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--    /// End  Property Main Thambnail Image Update //// -->

    <!--  /// Property Multi Image Update //// -->


    <div class="page-content" style="margin-top: -35px;">

        <div class="row profile-body">
            <div class="col-md-12 col-xl-12 middle-wrapper">
                <div class="row">

                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Edit Multi Image </h6>


                            <form method="post" action="{{ route('update.property.multiimage') }}" id="myForm"
                                enctype="multipart/form-data">
                                @csrf


                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Sl</th>
                                                <th>Image</th>
                                                <th>Change Image </th>
                                                <th>Delete </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($multiImage as $key => $img)
                                                <tr>

                                                    <td>{{ $key + 1 }}</td>

                                                    <td class="py-1">
                                                        <img src="{{ asset($img->photo_name) }}" alt="image"
                                                            style="width:50px; height:50px;">
                                                    </td>

                                                    <td>
                                                        <input type="file" class="form-control"
                                                            name="multi_img[{{ $img->id }}]">
                                                    </td>
                                                    <td>
                                                        <input type="submit" class="btn btn-primary px-4"
                                                            value="Update Image">

                                                        <a href="{{ route('property.multiimg.delete', $img->id) }}"
                                                            class="btn btn-danger" id="delete">Delete </a> </a>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </form>

                            <form method="post" action="{{ route('store.new.multiimage') }}" id="myForm"
                                enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="imageid" value="{{ $property->id }}">

                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <input type="file" class="form-control" name="multi_img">
                                            </td>

                                            <td>
                                                <input type="submit" class="btn btn-info px-4" value="Add Image">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!--  /// End Property Multi Image Update //// -->

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
