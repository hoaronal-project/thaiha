<div class="bg-black py-9 pd-x-9 footer-pt">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-3 gap-6 grid-set">
            <div class="flex flex-col text-zinc-400 text-sm font-normal border-add">
                <div class="text-brown-400 font-medium text-xl">THÁI HÀ GROUP</div>
                <hr class="w-20 mt-1" />
                <p class="mt-6"><span class="text-brown-400 font-medium">Thông điệp:</span> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <div class="font-medium text-brown-400 mt-3">LIÊN HỆ CÔNG TY CỔ PHẦN ÐẦU TƯ THÁI HÀ GROUP</div>
                <div class="mt-3"><span class="text-brown-400 font-medium">Địa chỉ trụ sở:</span> Số 29A Nguyễn Đình Chiểu - P. Đa Kao - Q. 1 - TP HCM</div>
                <div class="mt-3"><span class="text-brown-400 font-medium">Văn phòng giao dịch:</span> Số 800 - Đường Phan Bội Châu - Khu Đô Thị 25 - Tổ 28 - Phường Hai Bà Trưng - TP Hà Nội</div>
                <div class="mt-3"><span class="text-brown-400 font-medium">Email:</span> THG_hitachi@gmail.com</div>
                <div class="mt-3"><span class="text-brown-400 font-medium">Hotline:</span> 0948.668.116 - 0243.554.8888</div>
            </div>
            <div class="flex flex-col footer-grip-custom">
                <div class="text-brown-400 font-medium text-xl">THÔNG TIN ĐẾN THÁI HÀ GROUP</div>
                <hr class="w-20 mt-1" />
                @livewire('footer-contact-form')
            </div>
            <div class="flex flex-col footer-grip-custom">
                <div class="text-brown-400 font-medium text-xl">ĐĂNG KÍ NHẬN TIN TỨC HỖ TRỢ</div>
                <hr class="w-20 mt-1" />
                @livewire('footer-newsletter-form')
            </div>
        </div>
    </div>
</div>

<div class="bg-black border-t border-neutral-700 py-9 pd-x-9 footer-news">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-3 gap-1 grid-set">
            <div class="flex flex-col">
                <div class="text-brown-400 font-medium text-xl">TIN TỨC ĐƯỢC XEM NHIỀU</div>
                <hr class="w-20 mt-1" />
            </div>
            <div class="col-span-2">
                <div class="px-6 grid grid-set grid-cols-2 gap-x-2 gap-y-6 text-zinc-400 text-sm font-normal footer-news-pt">
                    @foreach ($footerArticles as $footerArticle)
                    <a class="flex" href="/">
                        <img src="{{ $footerArticle->image_url ?? 'https://via.placeholder.com/102x81.png' }}" style="width: 102px; height: 81px;" />
                        <div class="ml-3 flex flex-col">
                            <p class="text-brown-400 font-medium">{{ $footerArticle->created_at->format('d \T\h\á\n\g m, Y') }}</p>
                            <p class="mt-1">{{ $footerArticle->title }}</p>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-neutral-900 pd-30">
    <div class="max-w-7xl mx-auto">
        <div class="flex justify-between items-center h-20 text-white footer-coppy">
            <div class="footer-coppy__slug">
                <span class="slug_title">Copyrights © 2020 </span> All Rights Reserved by <span class="text-brown-400 font-medium">THAI HA GROUP</span>
            </div>
            <div class="flex gap-4 text-2xl footer-coppy__icon">
                <a href="https://facebook.com" target="_blank" class="hover:opacity-80">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36">
                    <g id="Group_398" data-name="Group 398" transform="translate(-1296 -7326)">
                        <g id="Ellipse_22" data-name="Ellipse 22" transform="translate(1296 7326)" fill="none" stroke="#fafafa" stroke-width="1">
                        <circle cx="18" cy="18" r="18" stroke="none"/>
                        <circle cx="18" cy="18" r="17.5" fill="none"/>
                        </g>
                        <path id="facebook" d="M12.593,2.6h1.431V.11A18.476,18.476,0,0,0,11.94,0C9.877,0,8.464,1.3,8.464,3.683V5.877H6.187V8.663H8.464v7.01h2.791V8.664h2.184l.347-2.786H11.254V3.959c0-.805.217-1.356,1.339-1.356Z" transform="translate(1303.813 7336)" fill="#fafafa"/>
                    </g>
                    </svg>
                </a>
                <a href="https://instagram.com" target="_blank" class="hover:opacity-80">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36">
                    <g id="Group_396" data-name="Group 396" transform="translate(-3277 -9996)">
                        <g id="Ellipse_26" data-name="Ellipse 26" transform="translate(3277 9996)" fill="none" stroke="#fafafa" stroke-width="1">
                        <circle cx="18" cy="18" r="18" stroke="none"/>
                        <circle cx="18" cy="18" r="17.5" fill="none"/>
                        </g>
                        <g id="instagram" transform="translate(3288 10006.999)">
                        <path id="Path_493" data-name="Path 493" d="M9.518,5.838A3.672,3.672,0,1,0,13.19,9.51,3.672,3.672,0,0,0,9.518,5.838Zm0,6.056A2.384,2.384,0,1,1,11.9,9.51,2.383,2.383,0,0,1,9.518,11.894Z" transform="translate(-2.36 -2.356)" fill="#fafafa"/>
                        <path id="Path_494" data-name="Path 494" d="M10.107.046c-1.317-.061-4.578-.058-5.9,0a4.277,4.277,0,0,0-3,1.157C-.169,2.579.007,4.434.007,7.154c0,2.784-.155,4.6,1.2,5.951,1.382,1.381,3.263,1.2,5.951,1.2,2.757,0,3.709,0,4.684-.376A3.916,3.916,0,0,0,14.267,10.1c.062-1.317.058-4.578,0-5.9a3.944,3.944,0,0,0-4.16-4.16Zm2.084,12.149c-.9.9-2.154.822-5.05.822-2.982,0-4.177.044-5.05-.831-1-1-.823-2.606-.823-5.041,0-3.295-.338-5.668,2.969-5.837.76-.027.983-.036,2.9-.036l.027.018c3.178,0,5.671-.333,5.821,2.973.034.754.042.981.042,2.89,0,2.947.055,4.15-.831,5.041Z" transform="translate(0 0)" fill="#fafafa"/>
                        <circle id="Ellipse_27" data-name="Ellipse 27" cx="0.858" cy="0.858" r="0.858" transform="translate(10.118 2.479)" fill="#fafafa"/>
                        </g>
                    </g>
                    </svg>
                </a>
                <a href="https://twitter.com" target="_blank" class="hover:opacity-80">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36">
                    <g id="Group_400" data-name="Group 400" transform="translate(-1401 -7326)">
                        <g id="Ellipse_24" data-name="Ellipse 24" transform="translate(1401 7326)" fill="none" stroke="#fafafa" stroke-width="1">
                        <circle cx="18" cy="18" r="18" stroke="none"/>
                        <circle cx="18" cy="18" r="17.5" fill="none"/>
                        </g>
                        <g id="twitter_1_" data-name="twitter (1)" transform="translate(1412 7290)">
                        <g id="Group_395" data-name="Group 395" transform="translate(0 48)">
                            <path id="Path_489" data-name="Path 489" d="M14.886,49.432a6.363,6.363,0,0,1-1.758.482,3.035,3.035,0,0,0,1.343-1.687,6.1,6.1,0,0,1-1.935.739,3.052,3.052,0,0,0-5.279,2.087,3.142,3.142,0,0,0,.071.7,8.638,8.638,0,0,1-6.29-3.192,3.053,3.053,0,0,0,.938,4.079A3.014,3.014,0,0,1,.6,52.259v.033a3.066,3.066,0,0,0,2.445,3,3.046,3.046,0,0,1-.8.1,2.7,2.7,0,0,1-.578-.052,3.081,3.081,0,0,0,2.852,2.126,6.132,6.132,0,0,1-3.784,1.3A5.716,5.716,0,0,1,0,58.726,8.592,8.592,0,0,0,4.682,60.1a8.626,8.626,0,0,0,8.686-8.684c0-.135,0-.265-.011-.394A6.088,6.088,0,0,0,14.886,49.432Z" transform="translate(0 -48)" fill="#fafafa"/>
                        </g>
                        </g>
                    </g>
                    </svg>
                </a>
                <!-- <a href="https://youtube.com" target="_blank" class="hover:opacity-80">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36">
                    <g id="Group_401" data-name="Group 401" transform="translate(-1436 -7326)">
                        <g id="Group_397" data-name="Group 397" transform="translate(-1771 -2670)">
                        <g id="Ellipse_25" data-name="Ellipse 25" transform="translate(3207 9996)" fill="none" stroke="#fafafa" stroke-width="1">
                            <circle cx="18" cy="18" r="18" stroke="none"/>
                            <circle cx="18" cy="18" r="17.5" fill="none"/>
                        </g>
                        </g>
                        <g id="tik-tok" transform="translate(1416.577 7336.61)">
                        <path id="Path_495" data-name="Path 495" d="M43.947,3.961a3.594,3.594,0,0,1-2.172-.726A3.595,3.595,0,0,1,40.34.39H38.011V6.754l0,3.486a2.111,2.111,0,1,1-1.448-2V5.875a4.583,4.583,0,0,0-.672-.05,4.466,4.466,0,0,0-3.356,1.5,4.376,4.376,0,0,0,.2,6.035,4.543,4.543,0,0,0,.421.367,4.466,4.466,0,0,0,2.737.925,4.583,4.583,0,0,0,.672-.049,4.451,4.451,0,0,0,2.487-1.244,4.36,4.36,0,0,0,1.308-3.1l-.012-5.205a5.9,5.9,0,0,0,3.611,1.227V3.961h-.007Z" fill="#fafafa"/>
                        </g>
                    </g>
                    </svg>
                </a> -->
            </div>
        </div>
    </div>
</div>
