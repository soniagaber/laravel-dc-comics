<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use NumberFormatter;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $comics=Comic::all();
        $footerLinksSx=[
            [
                "title"=>'DC COMICS',
                "links"=>[
                    'Characters',
                    'Comics',
                    'Movies',
                    'TV',
                    'Games',
                    'Videos',
                    'News'
                ]
            ],
            [
                "title"=>"SHOP",
                "links"=>[
                    'Shop DC',
                    'Shop DC Collectibles',
                ]
            ]
        ];
        $footerLinksCentro=[
            [
                "title"=>"DC",
                "links"=>[
                    'Terms of Use',
                    'Privacy Policy (new)',
                    'Ad Choices',
                    'Advertising',
                    'Jobs',
                    'Subcriptions',
                    'Talent Workshops',
                    'CPSC Certificates',
                    'Ratings',
                    'Shop Help',
                    'Contact Us'
                ]
            ]
         ];
         $footerLinksDx =[
            [
                    "title"=>"SITES",
                    "links"=>[
                        'DC',
                        'MAD Magazines',
                        'DC Kids',
                        'DC Universe',
                        'DC Power Visa',
                    ]
                ],
            ];
        return view('comics/index', compact('footerLinksSx', 'footerLinksCentro', 'footerLinksDx', 'comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $footerLinksSx=[
            [
                "title"=>'DC COMICS',
                "links"=>[
                    'Characters',
                    'Comics',
                    'Movies',
                    'TV',
                    'Games',
                    'Videos',
                    'News'
                ]
            ],
            [
                "title"=>"SHOP",
                "links"=>[
                    'Shop DC',
                    'Shop DC Collectibles',
                ]
            ]
        ];
        $footerLinksCentro=[
            [
                "title"=>"DC",
                "links"=>[
                    'Terms of Use',
                    'Privacy Policy (new)',
                    'Ad Choices',
                    'Advertising',
                    'Jobs',
                    'Subcriptions',
                    'Talent Workshops',
                    'CPSC Certificates',
                    'Ratings',
                    'Shop Help',
                    'Contact Us'
                ]
            ]
         ];
         $footerLinksDx =[
            [
                    "title"=>"SITES",
                    "links"=>[
                        'DC',
                        'MAD Magazines',
                        'DC Kids',
                        'DC Universe',
                        'DC Power Visa',
                    ]
                ],
            ];
        return view('comics/create', compact('footerLinksSx', 'footerLinksCentro', 'footerLinksDx'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formData=$request->all();

        $formData['price']='$'. number_format($formData['price'], 2);

        $newComic= new Comic();
        $newComic->fill($formData);
        $newComic->save();

        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        $footerLinksSx=[
            [
                "title"=>'DC COMICS',
                "links"=>[
                    'Characters',
                    'Comics',
                    'Movies',
                    'TV',
                    'Games',
                    'Videos',
                    'News'
                ]
            ],
            [
                "title"=>"SHOP",
                "links"=>[
                    'Shop DC',
                    'Shop DC Collectibles',
                ]
            ]
        ];
        $footerLinksCentro=[
            [
                "title"=>"DC",
                "links"=>[
                    'Terms of Use',
                    'Privacy Policy (new)',
                    'Ad Choices',
                    'Advertising',
                    'Jobs',
                    'Subcriptions',
                    'Talent Workshops',
                    'CPSC Certificates',
                    'Ratings',
                    'Shop Help',
                    'Contact Us'
                ]
            ]
         ];
         $footerLinksDx =[
            [
                    "title"=>"SITES",
                    "links"=>[
                        'DC',
                        'MAD Magazines',
                        'DC Kids',
                        'DC Universe',
                        'DC Power Visa',
                    ]
                ],
            ];
        return view('comics/show', compact('footerLinksSx', 'footerLinksCentro', 'footerLinksDx', 'comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        $footerLinksSx=[
            [
                "title"=>'DC COMICS',
                "links"=>[
                    'Characters',
                    'Comics',
                    'Movies',
                    'TV',
                    'Games',
                    'Videos',
                    'News'
                ]
            ],
            [
                "title"=>"SHOP",
                "links"=>[
                    'Shop DC',
                    'Shop DC Collectibles',
                ]
            ]
        ];
        $footerLinksCentro=[
            [
                "title"=>"DC",
                "links"=>[
                    'Terms of Use',
                    'Privacy Policy (new)',
                    'Ad Choices',
                    'Advertising',
                    'Jobs',
                    'Subcriptions',
                    'Talent Workshops',
                    'CPSC Certificates',
                    'Ratings',
                    'Shop Help',
                    'Contact Us'
                ]
            ]
         ];
         $footerLinksDx =[
            [
                    "title"=>"SITES",
                    "links"=>[
                        'DC',
                        'MAD Magazines',
                        'DC Kids',
                        'DC Universe',
                        'DC Power Visa',
                    ]
                ],
            ];
        return view('comics/edit', compact('footerLinksSx', 'footerLinksCentro', 'footerLinksDx', 'comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $formData = $request->all();
        $comic->update($formData);
        $comic->save();
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
