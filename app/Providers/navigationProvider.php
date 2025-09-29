<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;


class navigationProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $view->with('navigationProvider', (object) [
                (object) [
                    'title' => 'Home',
                    'url' => route('frontend.index'),
                    'show_on_footer' => true,
                    'show_on_header' => true
                ],
                (object) [
                    'title' => 'About',
                    'url' => route('frontend.index', ['q' => 'about']),
                    'show_on_footer' => true,
                    'show_on_header' => true
                ],
                (object) [
                    'title' => 'Gallery',
                    'url' => route('frontend.index', ['q' => 'gallery']),
                    'show_on_footer' => true,
                    'show_on_header' => true
                ],
                (object) [
                    'title' => 'Career',
                    'url' => route('frontend.index', ['q' => 'carrier']),
                    'show_on_footer' => true,
                    'show_on_header' => false
                ],
                (object) [
                    'title' => 'Contact',
                    'url' => route('frontend.index', ['q' => 'contact']),
                    'show_on_footer' => false,
                    'show_on_header' => true
                ],
            ]);

            $view->with('companies', (object) [
                (object) [
                    'title' => 'SHABU INTEGRATED FARMS LTD',
                    'image' => 'invena/images/banner/farm1.jpg',
                    'icon' => 'invena/images/why-choose/icons/01.svg',
                    'content' => "Shabu Integrated Farms Ltd (SIFL) was incorporated on 23rd March 2019. The farm has 3000 hectares of land devoted
for the production of arable crops. These crops include Maize, Sorghum, Soybeans,
Sesame, Ginger, Cassava & Yam. In addition, the farm has Plantain and Banana
Plantations, pasture for animal grazing and a high-tech green house for increased
vegetable production such as Bell Pepper, Habanero Pepper, Eva and Top Tomatoes. The
farm houses the Agripreneur Academy which is an agricultural training centre. The centre
has run two sets of trainings so far on rice value chain and Customer Service skills in
Policy Management.",
                    'link' => (object) [
                        'title' => 'Read More',
                        'link' => route('frontend.index')
                    ]
                ],

                (object) [
                    'title' => 'DAN GATA EGGS LTD',
                    'image' => 'invena/images/banner/fowl.webp',
                    'icon' => 'invena/images/why-choose/icons/01.svg',
                    'content' => "Dan Gata Eggs Ltd is a poultry farm which has as its products good quality eggs and
broilers for the market The farm is located at Marmara in Nasarawa Local Government
Area. The company was incorporated on 19th December 2019. The farm presently has
a total of 21,500 layers with a plan to introduce a broiler arm of 5000 birds. The layers
were brought in as Day-Old-Chics (DOCS) at different periods and categorized into
three batches. The Batch A birds comprise of 5000 birds arrived in June of 2019;
Batch B of 6500 birds arrived in November 2019 while Batch C of 10000 birds arrived
in April 2020. As part of the company's expansion plan, a feed mill was established in
May 2020. The mill has a capacity of producing 1.5 tonnes of feeds per hour. ",
                    'link' => (object) [
                        'title' => 'Read More',
                        'link' => route('frontend.index')
                    ]
                ],


                (object) [
                    'title' => 'RAHAMA FISHERIES LTD.',
                    'image' => 'invena/images/banner/catfish.jpg',
                    'icon' => 'invena/images/why-choose/icons/01.svg',
                    'content' => "Rahama Fisheries Limited (RFL) is considered one of the leading fish farms in north central Nigeria. Incorporated
on the of December 2019, RFL is becoming widely known in the nation as according to the market analysis, internal
fish sales from RFL in Maiduguri exceed the forecast and are expected to see a huge demand in numerous cities
such as Port Harcourt, Lagos, Abuja and Kano over the next 2 years. FL has a total of30 ponds capable of stocking
8000 fingerlings and juveniles per pond and produces table size fish round the year. In addition, the farm has a
hatchery, dry fish and feed mill sections. The use of latest technological equipment in fish
feed production has improved the quality and quantity of fish produced in the newly
reconstituted RFL. The ponds are constructed using advanced civil engineering
procedures. Some of the technological innovations include use of electrical/solar fish
dryer, production of extruded (floating feed) and rearing of super Y red tailed tilapia. The
Farm has 46 staff employed in the Fisheries unit and the number is expected to increase in the coming years.",
                    'link' => (object) [
                        'title' => 'Read More',
                        'link' => route('frontend.index')
                    ]
                ],

                (object) [
                    'title' => 'New Keffi Hotel',
                    'image' => 'invena/images/banner/hotel2.jpg',
                    'icon' => 'invena/images/why-choose/icons/01.svg',
                    'content' => "New Keffi Hotel is the first hospitality outfit in Keffi. Established in 1950
as a Rest House and has maintained its position as the premium hotel in
the beautiful town of Keffi. New Keffi Hotel is strategically positioned
along the Keffi-Akwanga Express way with easy access to different
routes: Abuja, Kaduna, Jos etc. ",
                    'link' => (object) [
                        'title' => 'Read More',
                        'link' => route('frontend.index')
                    ]
                ],


                (object) [
                    'title' => 'NAGARI FRESH FARMS LTD',
                    'image' => 'invena/images/banner/cows1.jpg',
                    'icon' => 'invena/images/why-choose/icons/01.svg',
                    'content' => "Nagari Fresh Farm Produce Ltd has an arable crop farm, economic trees and cassava farm. The farm is in Marmara
with a branch of the farm in Shamagi. The farm covers an estimated 500 hectares of land in Marmara and 50 hectares
in Shamagi. The farm has an orange plantation, mango plantation, moringa, palm trees and a cattle feed lot. The farm
also has five major dams, three at Marmara and two at Shamagi that were built in 2005-2006. There is 70 hectares of
Sorghum, white maize farm, yam farm, accommodation for staff and a warehouse. The farm has 3 tractors, one
harvester, one combined harvester, planter and two Hilux pickups. The farm has a workforce of 18 staff. There are 150
goats in the farm.",
                    'link' => (object) [
                        'title' => 'Read More',
                        'link' => route('frontend.index')
                    ]
                ],




                (object) [
                    'title' => 'ADA Microfinance Bank Ltd',
                    'image' => 'invena/images/gallery/bank2.png',
                    'icon' => 'invena/images/why-choose/icons/01.svg',
                    'content' => "ADA Microfinance Bank Limited was incorporated in Nigeria under the
Companies and Allied Matter Act as a Private Limited Liability Company on the
8th November 2010. It was granted approval to carry on business of Unit Banking
on the 4th October 2011 by the Central Bank of Nigeria dated 8th September 2011
and was issued final operating license on the 4th November 2011. On 2nd January
2018 the bank commenced operation in her newly established Branch at
Garaku.",
                    'link' => (object) [
                        'title' => 'Read More',
                        'link' => route('frontend.index')
                    ]
                ],



                (object) [
                    'title' => 'HALAL-CUTS ULTRA MODERN ABATTOIR LTD',
                    'image' => 'invena/images/gallery/ab3.jpg',
                    'icon' => 'invena/images/why-choose/icons/01.svg',
                    'content' => "Halal Cuts Abattoir continues to be the revered institution of Nigeria's meat markets by
bringing a dynamic and improved butcher and smokehouse experience back to the people.
Halal Cuts Abattoir is a producer and marketer of highly hygienic, refrigerated, ready-to-eatfurther-processed, and frozen raw meat products. The natural meat abattoir is located in
Keffi, Nasarawa State, poised to offer the best in certified meat, with personal and
specialized services.",
                    'link' => (object) [
                        'title' => 'Read More',
                        'link' => route('frontend.index')
                    ]
                ],


                (object) [
                    'title' => 'The Fred Foods Garri factory',
                    'image' => 'invena/images/gallery/garri.jpg',
                    'icon' => 'invena/images/why-choose/icons/01.svg',
                    'content' => "The Fred Foods Garri factory produces good quality garri. With over 200 hectares of cassava
farm, being a raw material source for garri production, the Nagari Fresh Farm Produce Limited
has an automated garri production factory. The factory has locally fabricated fryers, pressers
and has the capacity to produce 300 tonnes of garri per annum. The factory has a total of 4
staff and 15 ad-hoc workers.",
                    'link' => (object) [
                        'title' => 'Read More',
                        'link' => route('frontend.index')
                    ]
                ],


                (object) [
                    'title' => 'Allied Commodity Agro-Outlet Ltd (ACAOL)',
                    'image' => 'invena/images/gallery/agro.jpg',
                    'icon' => 'invena/images/why-choose/icons/01.svg',
                    'content' => "Allied Commodity Agro-Outlet Ltd (ACAOL) was incorporated on the 22n day of March 2019. The company was
established with the aim of exporting various products from our subsidiaries and also serving as an off taker for
commodities from other farms",
                    'link' => (object) [
                        'title' => 'Read More',
                        'link' => route('frontend.index')
                    ]
                ],


                (object) [
                    'title' => 'Tabbas Seeds Ltd and Agwada Seeds Ltd',
                    'image' => 'invena/images/gallery/tabbas.jpg',
                    'icon' => 'invena/images/why-choose/icons/01.svg',
                    'content' => "Tabbas Seeds Ltd and Agwada Seeds Ltd were incorporated on the 3rd and 4th of February
2020 respectively. The companies were incorporated to carry on the business of production,
processing, packaging and marketing of seeds, The companies are yet to commence
operations due to the ongoing process of certification by the National Agricultural Seed Council",
                    'link' => (object) [
                        'title' => 'Read More',
                        'link' => route('frontend.index')
                    ]
                ]
            ]);

            $view->with('teamsContent', (object) [
                (object) [
                    'name' => 'Senator (Dr.) Abdullahi Adamu, CON',
                    'image' => "invena/images/about/founder.png",
                    'position' => 'Founder',
                    'fb' => '#',
                    'lk' => '#',
                    'is' => '#',
                    "content" => "
            His Excellency is the first elected Executive Governor of Nasarawa State (1999 -2007). A
distinguished Senator representing Nasarawa West, he was the Chairman, Senate Committee on
Agriculture. Prior to incursion into active politics, he was a Member of the Board of Directors of the
NTA Zone D in 1976/1978 and Chairman Board of Directors, Benue Cement Company, Gboko 1980-
1983.He served as Minister of State in the Ministry of Works and Housing of the Federal Republic of
Nigeria from February, 1995 to November 17. Senator Adamu is a recipient of several honours
including Honorary Doctorate including degrees in Engineering by the Rivers State University of
Science and Technology and Federal University of Akure in 2003 and 2004 respectively, Doctorate degree of Science in Public
Administration by the Federal University of Port-Harcourt, 2006 and Doctorate degree in Law by Nnamdi Azikiwe University
Awka. He was awarded the prestigious honour of the Commander of the Order of the Niger (CON) in 2008 A visionary leader
and a pioneer, Senator Abdullahi Adamu established the Nasarawa State University Keffi and other tertiary institutions and
founded Al ‘Hakam Holdings Ltd and many companies in the area of agriculture.
        "
                ],
                (object) [
                    'name' => 'PROF Ode Ojowu, OFR',
                    'image' => "invena/images/about/b1.jpeg",
                    'position' => 'Chairman of the Board',
                    'fb' => '#',
                    'lk' => '#',
                    'is' => '#',
                    "content" => "
            Ode Ojowu is a Professor of Economics. He obtained a First-Class Honour's Degree in Economics from ABU in 1974 and
won the AFGRAD Fellowship Award under which he completed his MA and PhD in Economics from
the University of Connecticut, USA between 1975 and 1980. He was appointed Commissioner for
Finance and Economic Planning in Benue State between 1984 and 1985 and later (1989 and 1991)
served as Consultant/Co-ordinator of Nigeria's Industrial Master Plan sponsored by UNIDO. Prof.
Ojowu was a member of the National Economic Intelligence Committee (NEIC) with oversight function
over the national budget and PTF projects (1994 - 1999).
Also, as a member of the Federal Executive Council he was entrusted with specific responsibility as
the Chief Economic Adviser to President Olusegun Obasanjo and Chief Executive Officer of the National Planning
Commission. Since his retirement from public service, he has continued to work as consultant to several local and international
organizations including the DFID, UNDP, the World Bank and Federal/State Governments. He was appointed Pro-Chancellor
and Chairman of Council, Benue State University till March 2016. Prof Ojowu is a 2011 recipient of the national honour of
OFR.
        "
                ],
                (object) [
                    'name' => 'Kabir Ibrahim',
                    'image' => "invena/images/about/b3.jpeg",
                    'position' => 'Director',
                    'fb' => '#',
                    'lk' => '#',
                    'is' => '#',
                    "content" => "
            He holds a B.Sc. and M.Sc. degrees in Architecture from the Ahmadu Bello University Zaria He joined Katsina Polytechnic in
1984, first a lecturer and then transferred his services to the Works and Services Department in 1985 where he rose to become
the Acting Director of Works. Upon leaving pubic service, he founded Kebram Associates, an
Architectural Consultancy Services firm and diversified into Construction, Agriculture and several other
areas culminating in founding Kebram Group of companies comprising 17 (seventeen) Companies.
Kabir Ibrahim is a Council Member of the Nigerian Institute of Architects (MNIA), Fellow of the Nigerian
Institute of Management (FNIM), African Champion for Change (ACC) and an awardee of the
Development in Nigeria Merit Award in Architecture (DIN MA). Kabir Ibrahim is the current National
President of All Farmers Association of Nigeria (AFAN), an Association with over 40 million members. Prior to that he was the
National President of Poultry Association of Nigeria (PAN). 
        "
                ],

                (object) [
                    'name' => 'DR. ABDULKARIM KANA',
                    'image' => "invena/images/about/b4.jpeg",
                    'position' => 'Director',
                    'fb' => '#',
                    'lk' => '#',
                    'is' => '#',
                    "content" => "
        Dr. Abdulkarim Abubakar Kana served as the Honourable Attorney General and Commissioner for
Justice in Nasarawa State. He holds a Ph.D. in Law from the prestigious University of Jos, Nigeria
and was appointed a Notary Public by the Chief Justice of Nigeria in 2012. Dr. Kana was the Dean
of the Faculty of Law Nasarawa State University, Keffi-Nigeria from 2014 to 2017 and is the author
of many peer-reviewed publications and books prominent among which is “Corruption,
Development and the Law in Nigeria (2014). He was a member of Nigeria's Council of Legal
Education and for many years and is currently serving as Counsel to the National Judicial Council
of Nigeria. Dr. Kana currently serves as a member of the Nasarawa State Executive Council. He was also a Member of
National Council on Water of Nigeria and the National Council on Power of Nigeria.
        "
                ],
                (object) [
                    'name' => 'Muhammad Nuraini Adamu',
                    'image' => "invena/images/about/b5.jpeg",
                    'position' => 'Director',
                    'fb' => '#',
                    'lk' => '#',
                    'is' => '#',
                    "content" => "
            Muhammad Nuraini Adamu is currently the Executive Director, Engineering and Estate Services of AL ‘hakam Holdings Ltd.
He also is the Chairman/CEO of Pavo Engineering Ltd, a technical servicing company that
specializes in Construction, Industrial Fabrication/installation and Maintenance Services. He
holds a Master's Degree (MSc) in Mechanical and System Engineering from the University of
Newcastle Upon Tyne. He obtained a Bachelor Degree (BEng) in Mechanical Engineering with
attended a sandwich course in Management from the University of Aberdeen, Scotland from
2003-2004. A member of the Nigerian Society of Engineers (NSE), he worked as Head of
Operations with Oilchem TC Ltd, an Oil and Gas servicing company between 2010-2012. He also
previously served Technical Director with Tongyi Engineering Ltd, a Chinese Multi-National construction company and
subsidiary of Tongyi Group from 2014-2016. In 2016, he was engaged as a principal partner in the 100 Hectares Solar Farm
project initiated by Apled Power Ltd and as a Stakeholder Relations Liaison. Currently, Muhammad is a member of Keffi
Investment Committee, a body charge with responsibility to attract investment to the ancient city of Keffi.
        "
                ],

                (object) [
                    'name' => 'Mallam Muhammad Kabir Abubakar',
                    'image' => "invena/images/about/av2.png",
                    'position' => 'Director',
                    'fb' => '#',
                    'lk' => '#',
                    'is' => '#',
                    "content" => "
        Mallam Muhammad Kabir Abubakar is an accomplished Banker, Journalist, Public Relations expert and Political activist. He
was News Editor / News Producer at the Nigeria Television Authority (NTA), Nasarawa State He later served as Commissioner
in several ministries in the State including, Works, Finance, Commissioner for Land, Survey & Town Planning and Housing, 
Page | 13
Environment and Urban Development. In 2008, he was appointed Executive Director Federal Mortgage Bank of Nigeria
(FMBN). Mallam Abubakar also served as Chairman of the Abuja Council of the Nigeria Union of Journalists; Chairman, Board
of Directors, Nasarawa Publishing Company Limited and was a Member of the Governing Board of the Nigeria Railway
Corporation
        "
                ],

                (object) [
                    'name' => 'Mr Pius Ademu Akubo, SAN',
                    'image' => "invena/images/about/b2.jpeg",
                    'position' => 'Director',
                    'fb' => '#',
                    'lk' => '#',
                    'is' => '#',
                    "content" => "
            Mr Pius Ademu Akubo, SAN, FCArb is the principal partner and Director in the law firm of Akubo and Company. He was
called to the Nigerian Bar in 1986 and in recognition of his industry, tenacity of purpose and dogged
practice, he was conferred with the prestigious rank of Senior Advocate of Nigeria in August, 2005 by
the Legal Practitioners Privileges Committee He is also a Notary Public having been appointed in 2005
by the Honourable, the Chief Justice of Nigeria. Mr Akubo has also won many meritorious awards and
is a member of various Professional bodies including the International Bar Association (IBA),
Commonwealth Lawyers Association (CLA), Advocates Africa (AA), Nigerian Bar Association (NBA),
Body of Senior Advocates of Nigeria (SAN). He is also an alumnus of the Haggai Institute, U.S.A and became a Fellow,
Nigerian Institute of Chartered Arbitrators, Nigeria in 2016.

        "
                ],

                (object) [
                    'name' => 'Mr. Adamu Ibrahim',
                    'image' => "invena/images/about/av2.png",
                    'position' => 'Director',
                    'fb' => '#',
                    'lk' => '#',
                    'is' => '#',
                    "content" => "
        Mr. Adamu Ibrahim has over thirty-six years cognate experience in the finance industry covering
commercial and merchant banking, microfinance and Islamic banking. During this period, he has
acquired vast experience in the areas of accounting, banking, finance, business, administration,
management, telecommunications, public sector, public relations, development and agricultural
finance. He obtained a BSc. Accounting, an MSc. Accounting and Finance as well as Post Graduate
Diploma in Islamic Banking and other certificates in Microfinance banking from Ahmadu Bello
University, Zaria and Chartered Institute of Bankers Nigeria. He had also attended Institute of Islamic Banking Insurance
London in 2009 and in 2015, he attended the Frankfurt School of Finance & Management, Germany from Ahmadu 2015. An
expert in Agricultural financing and Risk Management, Mallam Adamu has served in various capacities including Head,
Agricultural Extension and Field Service Business Unit of Nigeria Incentive Based Risk Sharing System for Agricultural
Lending (NIRSAL); Finance Expert/Chief Technical Officer (CTA)- International Fund For Agricultural Development (lFAD);
Managing Director, Integrated Microfinance Bank (IMFB); Executive Director North Integrated Microfinance Bank as well as
in several corporate institutions including Globacom Limited, Chase Merchant Bank Nigeria. Ltd/ Continental Merchant Bank
(a subsidiary of Chase Manhattan, New York.)
        "
                ]
            ]);
        });
    }
}
