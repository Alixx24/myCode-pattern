<div>
    <div class="flex justify-center">

        <div x-data="{ 
    open :  false,
    toggle(){
        if(this.open){
        return this.close()
    }
        this.open = true;
    },

    close(){
        if(!this.open){
        return
    }
        this.open = false;
    }
     }">


        </div>
    </div>

    <!-- start product lazy load -->
    <section class="mb-3">
        <section class="container-xxl">
            <section class="row">
                <section class="col">
                    <section class="back-faq">
                        <!-- start vontent header -->

                        <body>
                            <div class="container py-5">
                               

                                <div class="accordion" id="faqAccordion">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link faq-question" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    ?What is my intention
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqAccordion">
                                            <div class="card-body">
                                                From our goals, in addition to creating a platform for programmers who can introduce themselves in any language and anywhere in the world, we also want it to be a place to earn money...
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link faq-question" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    ?When will the second phase begin
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqAccordion">
                                            <div class="card-body">
                                                Currently, we are in phase number one, but phase number two (earning income through advertising) is being built and coded, and we sincerely thank you for your patience. Also, if you see a problem on the site or if there is a problem with your account, be sure to report it to support so that the problem can be completely resolved.
                                            </div>
                                        </div>

                                    </div>



                                    <div class="card">
                                        <div class="card-header" id="headingTree">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link faq-question" type="button" data-toggle="collapse" data-target="#collapseTree" aria-expanded="false" aria-controls="collapseTree">
                                                    معرفی روش های پرداخت :)
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseTree" class="collapse" aria-labelledby="headingTree" data-parent="#faqAccordion">
                                            <div class="card-body">
                                                همونطور که پیشتر عرض کردیم درگاه پرداخت آنلاین قابل استفاده صرفا برای کاربرانی است که اقدام به تکمیل پروفایل خود(اعم از آدرس جهته ارسال محصول و شماره ی تماس) مقدور میباشد.
                                            </div>
                                        </div>

                                    </div>

                                    <!-- Add more questions and answers here -->
                                </div>
                            </div>
                            <!-- Bootstrap JS (jQuery must be loaded before Bootstrap JS) -->
                            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
                            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                        </body>
                    </section>
                </section>
            </section>
        </section>
    </section>
</div>