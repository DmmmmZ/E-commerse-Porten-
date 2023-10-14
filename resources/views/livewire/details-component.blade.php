<div class="main">
    <div class="cart">
        <div class="cart_image">
            <figure id="magnifying_area">
                <img id="magnifying_img" src="{{ asset('assets/img/products') }}/{{ $product->image }}"
                    alt="{{ $product->name }}">
            </figure>
        </div>
        <div class="cart_date">
            <h2>{{ $product->name }}</h2>
            <hr>
            <p>{{ $product->regular_price }}</p>
            <hr>
            <p>{{ $product->short_description }}</p>
            <div class="cart_counter">
                <div class="counter" id="c" data-counter>
                    <div id="con">
                        <div class="counter__button" href="#"><i
                                class="fa-solid fa-angle-up counter__button_plus"></i></div>
                        <div class="counter__button" href="#"><i
                                class="fa-solid fa-angle-down counter__button_minus"></i></div>
                    </div>
                    <span class="counter__input"><input type="text" disabled value="1"></span>
                </div>
                <button type="button" class="btn" wire:click.prevent="store({{$product->id}},'{{$product->name}}','{{$product->regular_price}}')">Add to cart</button>
            </div>

        </div>
    </div>
    <div class="tabs">
        <input type="radio" name="tab-btn" id="tab-btn-1" value="" checked>
        <label for="tab-btn-1">Description</label>
        <input type="radio" name="tab-btn" id="tab-btn-2" value="">
        <label for="tab-btn-2">Additional info</label>
        <input type="radio" name="tab-btn" id="tab-btn-3" value="">
        <div id="content-1">
            {{ $product->description }}
            {{-- <p>Uninhibited carnally hired played in whimpered dear gorilla koala depending and much yikes off
                far quetzal goodness and from for grimaced goodness unaccountably and meadowlark near
                unblushingly crucial scallop
                tightly neurotic hungrily some and dear furiously this apart.</p>
            <p>Spluttered narrowly yikes left moth in yikes bowed this that grizzly much hello on spoon-fed that
                alas rethought much decently richly and wow against the frequent fluidly at formidable
                acceptably flapped
                besides and much circa far over the bucolically hey precarious goldfinch mastodon goodness
                gnashed a jellyfish and one however because.
            </p>
            <ul class="product-more-infor mt-30">
                <li><span>Type Of Packing</span> Bottle</li>
                <li><span>Color</span> Green, Pink, Powder Blue, Purple</li>
                <li><span>Quantity Per Case</span> 100ml</li>
                <li><span>Ethyl Alcohol</span> 70%</li>
                <li><span>Piece In One</span> Carton</li>
            </ul>
            <hr class="wp-block-separator is-style-dots">
            <p>Laconic overheard dear woodchuck wow this outrageously taut beaver hey hello far meadowlark
                imitatively egregiously hugged that yikes minimally unanimous pouted flirtatiously as beaver
                beheld above forward
                energetic across this jeepers beneficently cockily less a the raucously that magic upheld far so
                the this where crud then below after jeez enchanting drunkenly more much wow callously
                irrespective limpet.</p>
            <h4 class="mt-30">Packaging & Delivery</h4>
            <hr class="wp-block-separator is-style-wide">
            <p>Less lion goodness that euphemistically robin expeditiously bluebird smugly scratched far while
                thus cackled sheepishly rigid after due one assenting regarding censorious while occasional or
                this more crane
                went more as this less much amid overhung anathematic because much held one exuberantly sheep
                goodness so where rat wry well concomitantly.
            </p>
            <p>Scallop or far crud plain remarkably far by thus far iguana lewd precociously and and less
                rattlesnake contrary caustic wow this near alas and next and pled the yikes articulate about as
                less cackled dalmatian
                in much less well jeering for the thanks blindly sentimental whimpered less across objectively
                fanciful grimaced wildly some wow and rose jeepers outgrew lugubrious luridly irrationally
                attractively
                dachshund.
            </p> --}}
        </div>
        <div id="content-2">
            <table>
                <tbody>
                    <tr>
                        <th>Stand Up</th>
                        <td>
                            <p>35″L x 24″W x 37-45″H(front to back wheel)</p>
                        </td>
                    </tr>
                    <tr>
                        <th>Folded (w/o wheels)</th>
                        <td>
                            <p>32.5″L x 18.5″W x 16.5″H</p>
                        </td>
                    </tr>
                    <tr>
                        <th>Folded (w/ wheels)</th>
                        <td>
                            <p>32.5″L x 24″W x 18.5″H</p>
                        </td>
                    </tr>
                    <tr>
                        <th>Door Pass Through</th>
                        <td>
                            <p>24</p>
                        </td>
                    </tr>
                    <tr>
                        <th>Frame</th>
                        <td>
                            <p>Aluminum</p>
                        </td>
                    </tr>
                    <tr>
                        <th>Weight (w/o wheels)</th>
                        <td>
                            <p>20 LBS</p>
                        </td>
                    </tr>
                    <tr>
                        <th>Weight Capacity</th>
                        <td>
                            <p>60 LBS</p>
                        </td>
                    </tr>
                    <tr>
                        <th>Width</th>
                        <td>
                            <p>24″</p>
                        </td>
                    </tr>
                    <tr>
                        <th>Handle height (ground to handle)</th>
                        <td>
                            <p>37-45″</p>
                        </td>
                    </tr>
                    <tr>
                        <th>Wheels</th>
                        <td>
                            <p>12″ air / wide track slick tread</p>
                        </td>
                    </tr>
                    <tr>
                        <th>Seat back height</th>
                        <td>
                            <p>21.5″</p>
                        </td>
                    </tr>
                    <tr>
                        <th>Head room (inside canopy)</th>
                        <td>
                            <p>25″</p>
                        </td>
                    </tr>
                    <tr>
                        <th>Color</th>
                        <td>
                            <p>Black, Blue, Red, White</p>
                        </td>
                    </tr>
                    <tr>
                        <th>Size</th>
                        <td>
                            <p>M, S</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <hr class="hr">
    <h3 class="h_title">Related products</h3>
    <div class="related_products">
        @foreach ($rproducts as $rproduct)
        <div class="related">
            <a href="{{route('product.details', ['slug'=>$rproduct->slug])}}">
                <img src="{{ asset('assets/img/products') }}/{{ $rproduct->image }}" alt="{{$rproduct->name}}">
            </a>
            <h4>{{$rproduct->name}}</h4>
            <p>${{$rproduct->regular_price}}</p>
        </div>
        @endforeach
    </div>
</div>
