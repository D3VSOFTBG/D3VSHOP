<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>{{env('SHOP_NAME')}}</title>
    <link rel="icon" type="image/x-icon" href="{{asset('/storage/img/global/' . env('FAVICON'))}}">

    <meta name="description" content="{{env('SHOP_NAME')}}">
    <meta name="keywords" content="{{env('SHOP_NAME')}}">
    <meta name="author" content="{{env('SHOP_NAME')}}">

    <script src="{{asset('/themes/' . env('THEME_NAME') . '/js/libs/jquery-1.11.1.js')}}"></script>
    <script src="{{asset('/themes/' . env('THEME_NAME') . '/js/libs/modernizr.js')}}"></script>
    <script type="text/javascript" src="{{asset('/themes/' . env('THEME_NAME') . '/js/libs/countdown/jquery.plugin.min.js')}}">
    </script>
    <script type="text/javascript" src="{{asset('/themes/' . env('THEME_NAME') . '/js/libs/countdown/jquery.countdown.js')}}">
    </script>
    <script type="text/javascript" src="{{asset('/themes/' . env('THEME_NAME') . '/js/libs/jquery.jcarousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/themes/' . env('THEME_NAME') . '/js/libs/jquery.localScroll.min.js')}}">
    </script>
    <script type="text/javascript" src="{{asset('/themes/' . env('THEME_NAME') . '/js/libs/jquery.scrollTo.min.js')}}"></script>

    <link rel="stylesheet" href="{{asset('/themes/' . env('THEME_NAME') . '/css/style.css')}}">
</head>

<body onload="loaded();">
    <div class="body">
        <header class="cnt_wrapp">
            <a class="logo" href="{{route('home')}}"><span>Mega Extaz</span> {{__('megaextaz_home.arousing gum')}}</a>
            <div class="left_side">
                <h1>{{__('megaextaz_home.Unique')}} <br>{{__('megaextaz_home.exciting')}}
                    <br>{{__('megaextaz_home.gum')}} Mega Extaz <br><b>{{__('megaextaz_home.now in Europe')}}</b></h1>
                <p class="borders">{{__('megaextaz_home.highest degree')}}<br>{{__('megaextaz_home.ecstasy')}}!</p>
                <ul class="composition">
                    <li class="li1">{{__('megaextaz_home.Leuzea')}}</li>
                    <li class="li2">{{__('megaextaz_home.Orange')}}</li>
                    <li class="li3">{{__('megaextaz_home.Pink')}} <br>{{__('megaextaz_home.rhodiola')}}</li>
                    <li class="li4">{{__('megaextaz_home.Barbed')}} <br>{{__('megaextaz_home.eleutherococcus')}}</li>
                </ul>
            </div>
            <div class="right_side">
                <h2><b>{{__('megaextaz_home.PLACE YOUR ORDER TODAY')}}</b>
                    <br>{{__('megaextaz_home.and you will be soon')}} <br>{{__('megaextaz_home.enjoy')}}
                    <br>{{__('megaextaz_home.passionate sex')}} <br>{{__('megaextaz_home.with a loved man!')}}</h2>
                <ul>
                    <li>{{__('megaextaz_home.Mega extaz is not a drug')}}....................</li>
                    <li>{{__('megaextaz_home.made only from natural ingredients')}}</li>
                    <li>{{__('megaextaz_home.has a very fast and strong stimulating effect')}}</li>
                    <li>{{__('megaextaz_home.begins to act through')}}
                        <br>{{__('megaextaz_home.5 minutes after ingestion')}}</li>
                </ul>
            </div>
            <div class="quantity">
                <div class="number"><small>5</small></div>{{__('megaextaz_home.Packages left')}}
                <br>{{__('megaextaz_home.at a super price')}}
            </div>
            <div class="price">
                <div class="new"><b class="price_main">{{discounted_price($product->price, $product->discount)}} {{$default_currency_code}}</b></div>
                <div class="old"><b class="price_old">{{$product->price}} {{$default_currency_code}}</b>
                </div>
            </div>
            <ul class="clearfix garant">
                <li class="li1">{{__('megaextaz_home.Guarantee')}} <br>{{__('megaextaz_home.the result')}}</li>
                <li class="li2">{{__('megaextaz_home.certificate')}} <br>{{__('megaextaz_home.quality')}}</li>
            </ul>
            <div class="countdown_wrapp">
                <select onchange="handleSelect(this)">
                    <option value="/lang/en" @if (session()->get('locale') == 'en' || session()->has('locale')) selected @endif>English</option>
                    <option value="/lang/ru" @if (session()->get('locale') == 'ru') selected @endif>Russian</option>
                    <option value="/lang/de" @if (session()->get('locale') == 'de') selected @endif>German</option>
                    <script type="text/javascript">
                        function handleSelect(elm) {
                            window.location = elm.value;
                        }
                    </script>
                </select>
                <!--<div class="countdown clearfix"></div>-->
            </div>
            <a href="#order_header" class="button">{{__('megaextaz_home.order immediately')}}</a>
            <div class="yellow_line">{{__('megaextaz_home.Contains')}} <br>{{__('megaextaz_home.Taurine')}}!</div>
            <ul class="composition2">
                <li class="li1">{{__('megaextaz_home.Pink')}} <br>{{__('megaextaz_home.rhodiola')}}</li>
                <li class="li2">{{__('megaextaz_home.Barbed')}} <br>{{__('megaextaz_home.eleutherococcus')}}</li>
                <li class="li3">{{__('megaextaz_home.Leuzea')}}</li>
                <li class="li4">{{__('megaextaz_home.Orange')}}</li>
            </ul>
            <h4 class="dotted"><span>{{__('megaextaz_home.Only natural ingredients!')}}</span></h4>
        </header><!-- /header -->
        <div class="says_no cnt_wrapp">
            <h2>{{__('megaextaz_home.Does your significant other constantly say no?')}}</h2>
            <ul>
                <li>{{__('megaextaz_home.Tired of excuses?')}}</li>
                <li>{{__('megaextaz_home.Are you having trouble relaxing and thinking about your partner')}}?</li>
            </ul>
            <p>{{__("megaextaz_home.Time to try Mega Extaz chewing gum. It doesn't matter if you are a man or a woman. With this tool you will be able to liberate your partner, few will resist the action of Mega Extaz. Your partner will want you and you will forget what the word «NO» is")}}.</p>
        </div><!-- /.says_no -->
        <div class="blocks yellow cnt_wrapp">
            <h4>{{__("megaextaz_home.Did you 'fail again'? Thinking about work and can't concentrate and have fun?")}}</h4>
            <p>{{__("megaextaz_home.Problems in bed and potency? Forget all these problems, they are in the past. Chewing gum will help you forget about all the problems and get real pleasure from your partner.")}}</p>
        </div><!-- /.blocks.yellow -->
        <div class="blocks blue cnt_wrapp">
            <h4>{{__("megaextaz_home.Did you like a colleague but can't take the first step? Let her do it!")}}</h4>
            <p>{{__('megaextaz_home.Mega Extaz will help the girl to be liberated, set her in the right mood and remove all her complexes.')}}</p>
        </div><!-- /.blocks.blue -->
        <div class="recommend cnt_wrapp clearfix">
            <h3 class="headline"><span>{{__('megaextaz_home.Chewing gum')}}</span> {{__('megaextaz_home.recommend')}}</h3>
            <ul class="clearfix">
                <li>
                    <span class="image"><img src="{{asset('/themes/' . env('THEME_NAME') . '/images/magazine_1.jpg')}}"
                            alt=""></span>
                    Men’s health
                    <span class="date">{{__('megaextaz_home.June 2013')}}</span>
                </li>
                <li>
                    <span class="image"><img src="{{asset('/themes/' . env('THEME_NAME') . '/images/magazine_2.jpg')}}"
                            alt=""></span>
                    Playboy
                    <span class="date">{{__('megaextaz_home.June 2013')}}</span>
                </li>
                <li>
                    <span class="image"><img src="{{asset('/themes/' . env('THEME_NAME') . '/images/magazine_3.jpg')}}"
                            alt=""></span>
                    Cosmopolitan
                    <span class="date">{{__('megaextaz_home.June 2013')}}</span>
                </li>
            </ul>
        </div><!-- /.recommend -->
        <div class="expert cnt_wrapp clearfix">
            <h3 class="headline">{{__('megaextaz_home.Expert opinion')}}</h3>
            <p>{{__('megaextaz_home.The stimulating properties of natural ingredients in Mega Extaz chewing gum have been known for a long time. But only now we managed to collect them in one product. As a doctor, I believe that when it comes to the use of drugs, then these should be exclusively natural products. Chewing gum Mega Extaz is the best sex stimulant product available today. My medical practice in the field of sexual stimulation proves the exceptional effectiveness of Mega Extaz chewing gum, and therefore I recommend it to my patients without hesitation.')}}</p>
            <ul>
                <li>{{__('megaextaz_home.Doctor of Medical Sciences Clinic Research Institute Nutrition')}}</li>
                <li>{{__('megaextaz_home.Tkachenko A.S.')}}</li>
            </ul>
        </div><!-- /.expert -->
        <div class="reviews cnt_wrapp clearfix">
            <h3 class="headline">{{__('megaextaz_home.They already')}} <span>{{__('megaextaz_home.have tried')}}</span></h3>
            <div class="reviews_box">
                <div>
                    <p>{{__("megaextaz_home.He was always a modest and quiet guy. If it weren't for Mega Extaz, my friendship with my future wife would never have grown into closer ones. Chewing gum helped to relax and surrender to passion in full force. We were both delighted. We have been married for 3 years and our intimate life is at the highest level!")}}</p>
                </div>
                <ul>
                    <li>{{__('megaextaz_home.Igor Belanov')}} <img src="{{asset('/themes/' . env('THEME_NAME') . '/images/reviews_1.png')}}"></li>
                    <li>{{__('megaextaz_home.23 years old')}}</li>
                </ul>
            </div>
            <div class="reviews_box">
                <div>
                    <p>{{__('megaextaz_home.After parting with a young man, for a long time she could not decide on a new relationship. A friend advised me to use Mega Extaz chewing gum. It was something! My new boyfriend did not expect such passion from me and was pleasantly surprised. Recently he proposed to me! The Mega Extaz gum really works.')}}</p>
                </div>
                <ul>
                    <li>{{__('megaextaz_home.Irina Pirozhkova')}} <img src="{{asset('/themes/' . env('THEME_NAME') . '/images/reviews_2.png')}}"></li>
                    <li>{{__('megaextaz_home.23 years old')}}</li>
                </ul>
            </div>
            <div class="reviews_box">
                <div>
                    <p>{{__('We have been married for 20 years. Over time, intimate life has become rather monotonous. I decided to somehow transform the relationship, my wife supported me. Both tried the Mega Extaz chewing gum and we were very pleased with the result. The effect is almost instantaneous. My wife relaxed, I felt a surge of strength and sexual energy.')}}</p>
                </div>
                <ul>
                    <li>{{__('megaextaz_home.Albert Medvedev')}} <img src="{{asset('/themes/' . env('THEME_NAME') . '/images/reviews_3.png')}}"></li>
                    <li>{{__('megaextaz_home.45 years')}}</li>
                </ul>
            </div>
        </div><!-- /.reviews -->
        <div class="faq">
            <div class="cnt_wrapp">
                <div class="faq_row clearfix">
                    <div class="faq_box">
                        <div class="faq_wrapp">
                            <h4>{{__('megaextaz_home.Is it not harmful?')}}</h4>
                            <p>{{__('megaextaz_home.Mega Extaz chewing gum contains only natural ingredients. It is not a drug, certified and has no contraindications.')}}</p>
                        </div>
                    </div>
                    <div class="faq_box">
                        <div class="faq_wrapp">
                            <h4>{{__('megaextaz_home.How it works?')}}</h4>
                            <p>{{__('megaextaz_home.A unique set of natural aphrodisiacs, when ingested, helps to relax, increase libido, awaken sexual desires and give strength to both partners. Try 1-2 pills 10-20 minutes before intercourse, and you will be pleasantly surprised!')}}</p>
                        </div>
                    </div>
                </div>
                <div class="faq_row clearfix">
                    <div class="faq_box">
                        <div class="faq_wrapp">
                            <h4>{{__('megaextaz_home.How to distinguish a fake?')}}</h4>
                            <p>{{__('megaextaz_home.On the territory of Europe and the CIS, the only official supplier of Mega Extaz chewing gum is our company, you can place an order on the MEGAEXTAZ.COM website. Each product package has a unique identification code, you can check its authenticity on the website. If you find a fake, you can contact customer support, report an unscrupulous seller and exchange the fake for the original product.')}}</p>
                            <p>{{__('megaextaz_home.If you did not find our unique CODE on the package, please contact our specialists for help!')}}</p>
                        </div>
                    </div>
                    <div class="faq_box">
                        <div class="faq_wrapp">
                            <h4>{{__('megaextaz_home.Delivery')}}</h4>
                            <p>{{__('megaextaz_home.For Moscow and St. Petersburg: 2-3 days from the moment of placing the order, for other regions 7-14 days from the moment of ordering.')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.faq -->
        <div class="how_order cnt_wrapp clearfix">
            <h3 class="headline">{{__('megaextaz_home.How to order')}} <span>Mega Extaz</span></h3>
            <ul class="clearfix">
                <li class="li1">{{__('megaextaz_home.Fill the form')}} <br>{{__('megaextaz_home.order below')}}</li>
                <li class="li2">{{__('megaextaz_home.Wait for the call from')}} <br>{{__('megaextaz_home.operator')}}</li>
                <li class="li3">{{__('megaextaz_home.Pay shipping')}} <br>{{__('megaextaz_home.with credit card')}}</li>
            </ul>
        </div><!-- /.how_order -->
        <div class="order_wrapp">
            <div class="cnt_wrapp">
                <h3 id="order_header" class="headline">{{__('megaextaz_home.Order')}}</h3>
                <div class="left_side">
                    <h4 style="font-size: 25px;">{{__('megaextaz_home.Only today')}} <span>-{{$product->discount}}%</span></h4>
                    <div class="price clearfix">
                        <div class="new"><b class="price_main">{{discounted_price($product->price, $product->discount)}}
                                {{$default_currency_code}}</b></div>
                        <div class="old"><b class="price_old">{{$product->price}}
                                {{$default_currency_code}}</b></div>
                    </div>
                    <!--
                    <div class="countdown_wrapp">
                        <div class="countdown clearfix"></div>
                    </div>
                    -->
                </div>
                <form action="{{route('stripe')}}" method="post" id="order_form" class="cpa__order_form">
                    @csrf

                    <input type="hidden" name="product_id" value="{{$product->id}}">
                    <div class="row clearfix">
                        <label for="label0">{{__('megaextaz_home.Country')}}</label>
                        <select id="country" name="country" required>
                            <option value="Afganistan">Afghanistan</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="American Samoa">American Samoa</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguilla">Anguilla</option>
                            <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Aruba">Aruba</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Azerbaijan">Azerbaijan</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Belize">Belize</option>
                            <option value="Benin">Benin</option>
                            <option value="Bermuda">Bermuda</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="Bolivia">Bolivia</option>
                            <option value="Bonaire">Bonaire</option>
                            <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Brazil">Brazil</option>
                            <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                            <option value="Brunei">Brunei</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Canary Islands">Canary Islands</option>
                            <option value="Cape Verde">Cape Verde</option>
                            <option value="Cayman Islands">Cayman Islands</option>
                            <option value="Central African Republic">Central African Republic</option>
                            <option value="Chad">Chad</option>
                            <option value="Channel Islands">Channel Islands</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Christmas Island">Christmas Island</option>
                            <option value="Cocos Island">Cocos Island</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo">Congo</option>
                            <option value="Cook Islands">Cook Islands</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Cote DIvoire">Cote DIvoire</option>
                            <option value="Croatia">Croatia</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Curaco">Curacao</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czech Republic">Czech Republic</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="East Timor">East Timor</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Falkland Islands">Falkland Islands</option>
                            <option value="Faroe Islands">Faroe Islands</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="French Guiana">French Guiana</option>
                            <option value="French Polynesia">French Polynesia</option>
                            <option value="French Southern Ter">French Southern Ter</option>
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Gibraltar">Gibraltar</option>
                            <option value="Great Britain">Great Britain</option>
                            <option value="Greece">Greece</option>
                            <option value="Greenland">Greenland</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guadeloupe">Guadeloupe</option>
                            <option value="Guam">Guam</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Hawaii">Hawaii</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hong Kong">Hong Kong</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="India">India</option>
                            <option value="Iran">Iran</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Ireland">Ireland</option>
                            <option value="Isle of Man">Isle of Man</option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Jamaica">Jamaica</option>
                            <option value="Japan">Japan</option>
                            <option value="Jordan">Jordan</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Kiribati">Kiribati</option>
                            <option value="Korea North">Korea North</option>
                            <option value="Korea Sout">Korea South</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="Laos">Laos</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libya">Libya</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Macau">Macau</option>
                            <option value="Macedonia">Macedonia</option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Marshall Islands">Marshall Islands</option>
                            <option value="Martinique">Martinique</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Mauritius">Mauritius</option>
                            <option value="Mayotte">Mayotte</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Midway Islands">Midway Islands</option>
                            <option value="Moldova">Moldova</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Montserrat">Montserrat</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Myanmar">Myanmar</option>
                            <option value="Nambia">Nambia</option>
                            <option value="Nauru">Nauru</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Netherland Antilles">Netherland Antilles</option>
                            <option value="Netherlands">Netherlands (Holland, Europe)</option>
                            <option value="Nevis">Nevis</option>
                            <option value="New Caledonia">New Caledonia</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Niue">Niue</option>
                            <option value="Norfolk Island">Norfolk Island</option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Palau Island">Palau Island</option>
                            <option value="Palestine">Palestine</option>
                            <option value="Panama">Panama</option>
                            <option value="Papua New Guinea">Papua New Guinea</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Phillipines">Philippines</option>
                            <option value="Pitcairn Island">Pitcairn Island</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Puerto Rico">Puerto Rico</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Republic of Montenegro">Republic of Montenegro</option>
                            <option value="Republic of Serbia">Republic of Serbia</option>
                            <option value="Reunion">Reunion</option>
                            <option value="Romania">Romania</option>
                            <option value="Russia">Russia</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="St Barthelemy">St Barthelemy</option>
                            <option value="St Eustatius">St Eustatius</option>
                            <option value="St Helena">St Helena</option>
                            <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                            <option value="St Lucia">St Lucia</option>
                            <option value="St Maarten">St Maarten</option>
                            <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                            <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                            <option value="Saipan">Saipan</option>
                            <option value="Samoa">Samoa</option>
                            <option value="Samoa American">Samoa American</option>
                            <option value="San Marino">San Marino</option>
                            <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Sierra Leone">Sierra Leone</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Slovakia">Slovakia</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="Solomon Islands">Solomon Islands</option>
                            <option value="Somalia">Somalia</option>
                            <option value="South Africa">South Africa</option>
                            <option value="Spain">Spain</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Swaziland">Swaziland</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syria">Syria</option>
                            <option value="Tahiti">Tahiti</option>
                            <option value="Taiwan">Taiwan</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania">Tanzania</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Togo">Togo</option>
                            <option value="Tokelau">Tokelau</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Turkmenistan">Turkmenistan</option>
                            <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                            <option value="Tuvalu">Tuvalu</option>
                            <option value="Uganda">Uganda</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Erimates">United Arab Emirates</option>
                            <option value="United States of America">United States of America</option>
                            <option value="Uraguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Vanuatu">Vanuatu</option>
                            <option value="Vatican City State">Vatican City State</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Vietnam">Vietnam</option>
                            <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                            <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                            <option value="Wake Island">Wake Island</option>
                            <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Zaire">Zaire</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                    </div>
                    <div class="row clearfix">
                        <label for="full_name">{{__('megaextaz_home.Full name')}}</label>
                        <input id="full_name" type="text" name="full_name" required>
                    </div>
                    <div class="row clearfix">
                        <label for="phone">{{__('megaextaz_home.Phone')}}</label>
                        <input id="phone" type="text" name="phone" required>
                    </div>
                    <div class="row clearfix">
                        <label for="email">{{__('megaextaz_home.Email')}}</label>
                        <input id="email" type="email" name="email" required>
                    </div>
                    <div class="row clearfix">
                        <label for="quantity">{{__('megaextaz_home.Quantity')}}</label>
                        <input id="quantity" type="number" name="quantity" required>
                    </div>
                    <div class="row clearfix">
                        <button class="button" type="submit">{{__('megaextaz_home.Order')}}</button>
                        <p>{{__('megaextaz_home.Price')}}: <span class="last_price price_main">1 = {{discounted_price($product->price, $product->discount)}}
                                {{$default_currency_code}}.</span></p>
                    </div>
                </form>
            </div>
        </div><!-- /.order_wrapp -->
        <footer class="cnt_wrapp">
            <p>{{__('megaextaz_home.The product is certified, composition, method and indications for use are indicated on the package.')}}</p>
            <p>{{__('megaextaz_home.Delivery is included in the price, payment is made upon receipt (cash on delivery).')}}</p>
        </footer><!-- /footer -->
    </div>

</body>
@if ($errors->any())
<script>
    function loaded()
    {
        alert("{{ implode(' ', $errors->all(':message')) }}");
    }
</script>
@endif

@if(session()->has('success'))
<script>
    function loaded()
    {
        alert("{{ session()->get('success') }}");
    }
</script>
@endif
</html>
