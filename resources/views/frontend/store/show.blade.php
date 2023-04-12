<x-frontend.layout
    title="{{ $store->meta_title }}"
    meta-title="{{ $store->meta_title }}"
    meta-keywords="{{ $store->meta_keywords }}"
    meta-description="{{ $store->meta_description }}"
>

    <div class="grid grid-cols-12 gap-4">
        <div class="col-span-12 lg:col-span-3 sm:col-span-12 mt-4 lg:mt-6 sm:mt-4">
            <div class="box mb-0">
                <img src="{{ $store->image_link }}"
                     alt="{{ $store->image_alt }}"
                     class="mx-auto block object-contain h-46 w-46"/>
                <h3 class="section-title text-center">{{ $store->name }}</h3>
                <div class="flex items-center justify-center my-2">
                    <svg class="h-4 w-4 rating mx-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path
                            d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"/>
                    </svg>
                    <svg class="h-4 w-4 rating mx-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path
                            d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"/>
                    </svg>
                    <svg class="h-4 w-4 rating mx-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path
                            d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"/>
                    </svg>
                    <svg class="h-4 w-4 rating mx-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path
                            d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"/>
                    </svg>
                    <svg class="h-4 w-4 rating mx-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path
                            d="M463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7zM288 376.4L288.1 376.3L399.7 435.9L378.4 309.6L469.2 219.8L343.8 201.4L288.1 86.85L288 87.14V376.4z"/>
                    </svg>
                </div>
                <p class="color-mid text-center text-sm">
                    {{ $store->short_description }}
                </p>
                <div class="text-center w-full mt-2 lg:mt-6 sm:mt-6">
                    <a href="{{ $store->direct_url }}" class="web_btn">Official website</a>
                </div>
            </div>
            <div class="side-title">
                <div class="grid grid-cols-2 gap-2 place-items-center">
                    <div class="col-span-1 text-center">
                        <h4 class="section-title">
                            {{ $store->coupons->where('type','deal')->count() }}
                        </h4>
                        <p>Deals</p>
                    </div>
                    <div class="col-span-1 text-center">
                        <h4 class="section-title">
                            {{ $store->coupons->where('type','code')->count() }}
                        </h4>
                        <p>Coupon</p>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-span-12 lg:col-span-9 sm:col-span-12">
            <div class="flex justify-center items-center lg:justify-between box mt-4 lg:mt-6 sm:mt-4">
                <div class="mr-12 flex items-center">
                    <svg class="w-4 h-4 tag" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path
                            d="M48 32H197.5C214.5 32 230.7 38.74 242.7 50.75L418.7 226.7C443.7 251.7 443.7 292.3 418.7 317.3L285.3 450.7C260.3 475.7 219.7 475.7 194.7 450.7L18.75 274.7C6.743 262.7 0 246.5 0 229.5V80C0 53.49 21.49 32 48 32L48 32zM112 176C129.7 176 144 161.7 144 144C144 126.3 129.7 112 112 112C94.33 112 80 126.3 80 144C80 161.7 94.33 176 112 176z"/>
                    </svg>
                    <h3 class="ml-2 tag-title">Top This Week Coupons</h3>
                </div>
            </div>
            <div class="grid grid-cols-12 gap-6 mt-4 lg:mt-6 sm:mt-4">
                @forelse($store->coupons as $coupon)
                    <div class="w-full col-span-12 lg:col-span-12 sm:col-span-12 relative box mb-0">
                        <div class="grid grid-cols-12 gap-2 px-2 lg:px-4 sm:px-2 place-items-center">
                            <div class="col-span-12 lg:col-span-2 sm:col-span-12">
                                <img src="{{ $store->image_link }}"
                                     class="h-20 w-32 object-contain" alt="{{ $store->image_alt }}">
                            </div>
                            <div class="col-span-12 lg:col-span-6 sm:col-span-12">
                                <div
                                    class="flex items-center text-xs justify-center my-2 color-green mb-1 lg:mb-3 sm:mb-1">
                                    <svg class="fill-current color-green h-4 w-4 mx-1" version="1.1"
                                         xmlns="http://www.w3.org/2000/svg"
                                         width="20" height="20"
                                         viewBox="0 0 20 20">
                                        <path
                                            d="M16.32 17.113c1.729-1.782 2.68-4.124 2.68-6.613 0-2.37-0.862-4.608-2.438-6.355l0.688-0.688 0.647 0.646c0.098 0.098 0.226 0.146 0.353 0.146s0.256-0.049 0.353-0.146c0.195-0.195 0.195-0.512 0-0.707l-2-2c-0.195-0.195-0.512-0.195-0.707 0s-0.195 0.512 0 0.707l0.647 0.646-0.688 0.688c-1.747-1.576-3.985-2.438-6.355-2.438s-4.608 0.862-6.355 2.438l-0.688-0.688 0.646-0.646c0.195-0.195 0.195-0.512 0-0.707s-0.512-0.195-0.707 0l-2 2c-0.195 0.195-0.195 0.512 0 0.707 0.098 0.098 0.226 0.146 0.354 0.146s0.256-0.049 0.354-0.146l0.646-0.646 0.688 0.688c-1.576 1.747-2.438 3.985-2.438 6.355 0 2.489 0.951 4.831 2.68 6.613l-2.034 2.034c-0.195 0.195-0.195 0.512 0 0.707 0.098 0.098 0.226 0.147 0.354 0.147s0.256-0.049 0.354-0.147l2.060-2.059c1.705 1.428 3.836 2.206 6.087 2.206s4.382-0.778 6.087-2.206l2.059 2.059c0.098 0.098 0.226 0.147 0.354 0.147s0.256-0.049 0.353-0.147c0.195-0.195 0.195-0.512 0-0.707l-2.034-2.034zM1 10.5c0-4.687 3.813-8.5 8.5-8.5s8.5 3.813 8.5 8.5c0 4.687-3.813 8.5-8.5 8.5s-8.5-3.813-8.5-8.5z">
                                        </path>
                                        <path
                                            d="M15.129 7.25c-0.138-0.239-0.444-0.321-0.683-0.183l-4.92 2.841-3.835-2.685c-0.226-0.158-0.538-0.103-0.696 0.123s-0.103 0.538 0.123 0.696l4.096 2.868c0.001 0.001 0.002 0.001 0.002 0.002 0.009 0.006 0.018 0.012 0.027 0.017 0.002 0.001 0.004 0.003 0.006 0.004 0.009 0.005 0.018 0.010 0.027 0.015 0.002 0.001 0.004 0.002 0.006 0.003 0.010 0.005 0.020 0.009 0.031 0.014 0.006 0.003 0.013 0.005 0.019 0.007 0.004 0.001 0.008 0.003 0.013 0.005 0.007 0.002 0.014 0.004 0.021 0.006 0.004 0.001 0.008 0.002 0.012 0.003 0.007 0.002 0.014 0.003 0.022 0.005 0.004 0.001 0.008 0.002 0.012 0.002 0.007 0.001 0.014 0.002 0.021 0.003 0.005 0.001 0.010 0.001 0.015 0.002 0.006 0.001 0.012 0.001 0.018 0.002 0.009 0.001 0.018 0.001 0.027 0.001 0.002 0 0.004 0 0.006 0 0 0 0-0 0-0s0 0 0.001 0c0.019 0 0.037-0.001 0.056-0.003 0.001-0 0.002-0 0.003-0 0.018-0.002 0.036-0.005 0.054-0.010 0.002-0 0.003-0.001 0.005-0.001 0.017-0.004 0.034-0.009 0.050-0.015 0.003-0.001 0.006-0.002 0.008-0.003 0.016-0.006 0.031-0.012 0.046-0.020 0.004-0.002 0.007-0.004 0.011-0.006 0.005-0.003 0.011-0.005 0.016-0.008l5.196-3c0.239-0.138 0.321-0.444 0.183-0.683z">
                                        </path>
                                    </svg>
                                    Expires On {{ $coupon->expiry_date }}
                                </div>
                                <h4 class="text-base font-bold color-green text-center">{{ $coupon->offer_box }}</h4>
                            </div>
                            <div class="col-span-12 lg:col-span-4 sm:col-span-12 w-full text-center">
                                <a href="{{ $coupon->tracking_link }}" target="_blank" class="coupn_btn py-1 text-xs">
                                    {{ $coupon->type == "code" ? "Copy Code & Visit Merchant" : "GET THIS DEAL" }}
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="w-full col-span-12 lg:col-span-12 sm:col-span-12 relative box mb-0">
                        <p class="text-center">No coupons found.</p>
                    </div>
                @endforelse
            </div>
        </div>

    </div>

</x-frontend.layout>
