<div>
    <p>its show</p>


    <div>

        <!-- start product lazy load -->
        <section class="mb-3" id="backAbout">
            <section class="">
                <section class="row">
                    <section class="col">
                        <section class="content-wrapper p-3 rounded-2">
                            <!-- start vontent header -->
                            <section class="content-header">
                                <section class="d-flex justify-content-between align-items-center">
                                    <h2 class="content-header-title">
                                        <span> about Me:) </span>
                                    </h2>


                                </section>
                            </section>
                            <!-- start vontent header -->
                            <section class="lazyload-wrapper">


                                <h2 class="text-center">

                                </h2>

                                <h5>
                                    <div><br>followers {{ $introMe->followers()->count() }} following {{ $introMe->following()->count() }}</span> <br><br><svg xmlns="http://www.w3.org/2000/svg" id="headProf" width="166" height="166" fill="currentColor" class="card-img-top mb-5 bi bi-person-bounding-box" viewBox="0 0 16 16">
                                                <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5M.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5m15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5" />
                                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                            </svg><span class="fa fa-certificate"> <span id="nameProfile">{{ $introMe->name }}
                                        </span> </div>
                                </h5>
                                <div id="backAboutText"></div> <br>


                                <div id="backAboutText">{!! $introMe->about_me !!} <br> Age {{ $introMe->age }} <br>


                                </div>
                                <div id="divLink">
                                    <h2> <a href="{{ $introMe->links }}" id="socialLink">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8" />
                                            </svg></a>
                                        <a href="https://x.com/alix_persian" id="socialLink">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                                                <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
                                            </svg>
                                        </a>
                                        <a href="https://t.me/GoldenCodeir" id="socialLink">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.287 5.906q-1.168.486-4.666 2.01-.567.225-.595.442c-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294q.39.01.868-.32 3.269-2.206 3.374-2.23c.05-.012.12-.026.166.016s.042.12.037.141c-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8 8 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629q.14.092.27.187c.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.4 1.4 0 0 0-.013-.315.34.34 0 0 0-.114-.217.53.53 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09" />
                                            </svg>
                                        </a>
                                    </h2>
                                </div>
                                <br>

                                <section class="content-header-link">

                                    <div x-data="{ tab :  'CV' }" id="aboutTab">

                                        <nav class="" id="aboutTabNav">
                                            <a id="aboutTabDiv" href="#" x-on:click.prevent="tab = 'CV'" :class="{'active' : tab === 'CV'}">CV</a>
                                            <a id="aboutTabDiv" href="#" x-on:click.prevent="tab = 'My social link'" :class="{'active' : tab === 'link'}">Social</a>
                                            <a id="aboutTabDiv" href="#" x-on:click.prevent="tab = 'persian CV'" :class="{'active' : tab === 'persian CV'}">persian CV</a>
                                        </nav>

                                        <div x-show="tab === 'CV'" x-transition class="" id="aboutTabDiv">
                                            <h4 id="h3Tab">CV</h4>
                                            <p id="aboutTabP">{{$introMe->cv}}</p>
                                        </div>

                                        <div x-show="tab === 'My social link'" x-transition class="">
                                            <h3 id="h3Tab">My social link</h3>
                                            <p id="aboutTabP">{{$introMe->links}}</p>
                                        </div>
                                        <div x-show="tab === 'persian CV'" x-transition class="">
                                            <h3 id="h3Tab">persian CV</h3>
                                            <p id="aboutTabP">{{ $introMe->persian_cv }}</p>
                                        </div>

                                    </div>
                                </section>

                            </section>
                        </section>
                    </section>
                </section>
            </section>
        </section>
        </section>
        <!-- end product lazy load -->


        <!-- end product lazy load -->
    </div>
</div>