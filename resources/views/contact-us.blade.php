<x-app-layout>
    <x-slot name="style">
        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/style-member.css', 'resources/css/style-index.css'])
    </x-slot>

    <main>
        <h1 class="justify-content-md-center"
            style="font-size: 55px; font-weight: 800; position:absolute; margin-top:100px;margin-left:18vw;">聯絡我們</h1>
        <div class="container">
            <div class="Material-contact-section section-padding section-dark justify-content-md-center"
                style="height:800px;">
                <div class="container text-white">
                    <img src="{{ asset('storage/images/contact-us-back.png') }}" class="contact-bg"
                        style="margin-bottom: 100px;">
                    <div class="form-container">
                        <div class="row justify-content-center">
                            <div class="col-md-6 p-3 animated justify-content-md-center p-4 text-white">
                            </div>
                        </div>
                        <div class="row justify-content-md-center ">
                            <div class="col-md-4 contact-widget-section2 wow animated fadeInLeft fs-5 from-group me-5"
                                style="margin-top:200px;" data-wow-delay=".2s">
                                <p class="fs-3">
                                    如商品咨詢、訂單詢問，或是其它寶貴意見，歡迎您來訊詢問，我們將會在收到訊息後盡快回覆。謝謝您 !</p>
                                <div class="fs-4">
                                    <p class="text-end me-4 fs-3  from-group">ToysYeh</p>
                                </div>
                            </div>
                            <div class="col-md-4 wow animated fadeInRight ms-5" data-wow-delay=".2s"
                                style="margin-top: 60px;">
                                <form class="shake" role="form" method="post" id="contactForm" name="contact-form"
                                    data-toggle="validator">
                                    <!-- Name -->
                                    <div class="form-group label-floating from-group">
                                        <label class="control-label fs-4" for="name">姓名</label> <span
                                            class="text-danger ">*必填</span>
                                        <input class="form-control mb-2" id="name" type="text" name="name"
                                            required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <!-- email -->
                                    <div class="form-group label-floating from-group">
                                        <label class="control-label fs-4" for="email">電子信箱</label><span
                                            class="text-danger ">*必填</span>
                                        <input class="form-control" id="email" type="email" name="email"
                                            required data-error="請填入電子郵件">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <!-- telephone -->
                                    <div class="form-group label-floating from-group">
                                        <label class="control-label fs-4">聯絡電話</label><span
                                            class="text-danger ">*必填</span>
                                        <input class="form-control" id="telephone" type="tel" name="telephone"
                                            pattern="[0-9]{4}-[0-9]{6}" required data-error="請填入您的聯絡電話t">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <!-- Subject -->
                                    <div class="form-group label-floating from-group">
                                        <label class="control-label fs-4">訂單編號</label>
                                        <input class="form-control" id="msg_subject" type="text" name="order-number">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <!-- Message -->
                                    <div class="form-group label-floating from-group">
                                        <label for="message" class="control-label fs-4">訊息</label>
                                        <textarea class="form-control" rows="3" id="message" name="message" data-error="請填入訊息"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <!-- Form Submit -->
                                    <div class="form-submit mt-5 from-group">
                                        <button class="btn btn-common btn-danger" type="submit" id="form-submit"><i
                                                class="material-icons mdi mdi-message-outline"></i> 確認送出</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
