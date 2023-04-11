<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Mockery\Undefined; //requestekhez kötelező behivatkozni.

class ListingController extends Controller
{
    public function index()
    {
        $listings = Listing::latest()->filter(request(['tag', 'search']))->paginate(6);

        if ($listings->isEmpty()) {
            return view('notFound');
        } else {
            return view('listing', [
                'heading' => 'Find Your Job',
                'listings' => $listings
            ]);
        }
    }

    public function show($id)
    {
        $listing = Listing::find($id);

        if ($listing) {
            return view(
                'singleListing',
                ['listings' => $listing]
            );
        } else {
            return view('404');
            //*abort('404')
        }
    }

    public function create(Request $request)
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $customMessage =
            [
                'company.required' => 'please enter the title',
            ];

        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'company'), 'min:2'],
            'location' => 'required',
            'website' => ['required', 'url'],
            'email' => ['required', Rule::unique("listings", 'email')],
            'tags' => 'required',
            'description' => 'required',

        ], $customMessage);


        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        dd($formFields);

        $formFields['user_id'] = auth()->id();

        Listing::create($formFields);
        return redirect('/')->with('message', 'Job Created Success');
    }


    public function edit($id)
    {
        $listing = Listing::find($id);
        return view('edit', ['listings' => $listing]);
    }

    public function update(Request $request, $id)
    {

        $customMessage =
            [
                'company.required' => 'please enter the title',
            ];

        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required'],
            'location' => 'required',
            'website' => ['required', 'url'],
            'email' => ['required'],
            'tags' => 'required',
            'description' => 'required',

        ], $customMessage);

        $listing = Listing::findOrFail($id);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        //dd($formFields);

        $listing->update($formFields);
        return redirect('/listings/manage')->with('message', 'Job Updated Success');
    }


    public function destroy($id)
    {
        $listing = Listing::findOrFail($id);
        $listing->delete($listing);
        return redirect('listings/manage')->with('message', 'Deleted Success');

    }

    public function manage()
    {
        return view('manage', [
            'listings' => auth()->user()->listings()->get()
        ]);
    }
}