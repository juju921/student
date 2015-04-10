<?php namespace App\Http\Controllers;

    use App\Http\Requests;
    use App\Http\Controllers\Controller;
    use App\Post;
    use App\category;
    use Illuminate\Http\Request;

    class PostController extends Controller {

        /**
         * Display a listing of the resource.
         *
         * @return Response
         */
        public function index()
        {

            $posts = \App\Post::paginate(5);
            $posts->setPath('posts');
            return view('posts.index', compact('posts'));
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return Response
         */
        public function create()
        {
            $category_options = ['null' => 'none'] + Category::lists('title','id');
            return view('posts.create', compact('category_options'));

        }

        /**
         * Store a newly created resource in storage.
         *
         * @return Response
         */
        public function store(Requests\PostRequest $request)
        {
            //dd($request->all());
            $posts = posts::create($request->all());
            $posts->category_id=($request->input('category_id')=="null") ? null:$request->input('category_id');
            $posts->save();
            return redirect()->to('posts')->with('message','ok');
        }

        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return Response
         */
        public function show($id)
        {
            $posts = Post::findOrfail($id);
            return view('posts.show', compact('posts'));
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return Response
         */
        public function edit($id)
        {
            $category_options = ['null' => 'none'] + Category::lists('title','id');

            $post = Post::find($id);

            return view('posts.edit', compact('post', 'category_options'));
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  int  $id
         * @return Response
         */
        public function update(Requests\PostRequest $request, $id)
        {
            //dd($request->all());
            $posts = Post::find($id);
            $posts->category_id=($request->input('category_id')=="null") ? null:$request->input('category_id');
            $posts->update($request->all());
            return redirect()->to('posts')->with('message', 'ok');
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return Response
         */
        public function destroy($id)
        {
            Post::find($id)->delete();

        }

    }
