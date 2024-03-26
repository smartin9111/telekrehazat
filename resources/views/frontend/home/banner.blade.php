<section class="banner-section" style="background-image: url({{ asset('frontend/assets/images/banner/banner-1.jpg') }});">
    <div class="auto-container">
        <div class="inner-container">
            <div class="content-box centred">
                <h2>Az oldal jelenleg tesztelés céljából üzemel</h2>
                <p>Amet consectetur adipisicing elit sed do eiusmod.</p>
            </div>
            <div class="search-field">
                <div class="tabs-box">
                    <div class="tab-btn-box">

                    </div>
                    <div class="tabs-content info-group">
                        <div class="tab active-tab" id="tab-1">
                            <div class="inner-box">
                                <div class="top-search">
                                    <form action="/properties/search" method="post" class="search-form">
                                        @csrf
                                        <div class="row clearfix">
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Szoba</label>
                                                    <div class="select-box">
                                                        <i class="fas fa-bed"></i> <select name="rooms"
                                                            class="rooms">
                                                            <option data-display="Szobák száma">
                                                                Szobák száma</option>
                                                            <option value="1">1 szoba</option>
                                                            <option value="2">2 szoba</option>
                                                            <option value="3">3 szoba</option>
                                                            <option value="4">4 szoba</option>
                                                            <option value="5">5 szoba</option>
                                                            <option value="6">6 szoba</option>

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Fürdőszoba</label>
                                                    <div class="select-box">
                                                        <i class="fas fa-bath"></i> <select name="bathrooms"
                                                            class="bathrooms">
                                                            <option data-display="Fürdőszobák száma">
                                                                Fürdőszobák száma</option>
                                                            <option value="1">1 fürdőszoba</option>
                                                            <option value="2">2 fürdőszoba</option>
                                                            <option value="3">3 fürdőszoba</option>
                                                            <option value="4">4 fürdőszoba</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Állapot</label>
                                                    <div class="select-box">
                                                        <select name="levelOfPreparation" class="levelOfPreparation">
                                                            <option selected="Készültségi szint" disabled="">
                                                                Készültségi szint
                                                            </option>
                                                            <option value="szerkezetkészen">Szerkezetkészen</option>
                                                            <option value="emelt szerkezetkésze">Emelt szerkezetkészen
                                                            </option>
                                                            <option value="kulcsrakészen">Kulcsrakészen</option>
                                                            <option value="prémium kulcsrakészen">Prémium kulcsrakészen
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="search-btn">
                                            <button type="submit"><i class="fas fa-search"></i>Keresés</button>
                                        </div>

                                </div>
                                <div class="switch_btn_one ">
                                    <button
                                        class="nav-btn nav-toggler navSidebar-button clearfix search__toggler">Részletes
                                        Keresés<i class="fas fa-angle-down"></i></button>
                                    <div class="advanced-search">
                                        <div class="close-btn">
                                            <a href="#" class="close-side-widget"><i class="far fa-times"></i></a>
                                        </div>
                                        <div class="row clearfix">


                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Rendezés</label>
                                                    <div class="select-box">
                                                        <select class="wide" name="priceGross">
                                                            <option data-display="Rendezés Árszerint">Rendezés Árszerint
                                                            </option>
                                                            <option value="asc">Ár növekvő</option>
                                                            <option value="desc">Ár csökkenő</option>
                                                        </select>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="range-box">
                                            <div class="row clearfix">
                                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                                    <div class="price-range">
                                                        <h6>Bruttó Ár (Ft)</h6>
                                                        <div class="range-input">
                                                            <div class="input"><input type="text"
                                                                    class="property-amount" name="propertyAmount"
                                                                    readonly=""></div>
                                                        </div>
                                                        <div class="price-range-slider"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                                    <div class="area-range">
                                                        <h6>Hasznos Terület (m2)</h6>
                                                        <div class="range-input">
                                                            <div class="input"><input type="text" class="area-range"
                                                                    name="useFullArea" readonly=""></div>
                                                        </div>
                                                        <div class="area-range-slider"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner-section end -->
