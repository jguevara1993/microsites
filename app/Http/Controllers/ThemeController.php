<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Finder\Finder;
use App\Theme;
use App\Option;
use App\Block;

class ThemeController extends Controller
{
    public function index()
    {
      $theme = Theme::all();
      return view('dashboard.admin.themes.index', ['themes' => $theme]);
    }

    public function setTheme(Request $request)
    {

      $theme = $request->input('slug');
      $settheme = DB::table('options')->where('name', 'theme')->update(['value' => $theme]);

      return redirect('theme')->with('message', 'El tema ' . $theme . ' ha sido activado exitosamente');

    }

    public function ShowBlocks()
    {
      $indexBlock = DB::table('blocks')->where('page', 'index')->paginate(3);
      $aboutBlock = DB::table('blocks')->where('page', 'about')->paginate(3);
      $promoBlock = DB::table('blocks')->where('page', 'promo')->paginate(3);
      $contactBlock = DB::table('blocks')->where('page', 'contact')->paginate(3);
      $footer_1_Block = DB::table('blocks')->where('page', 'footer_1')->paginate(3);
      $footer_2_Block = DB::table('blocks')->where('page', 'footer_2')->paginate(3);
      $footer_3_Block = DB::table('blocks')->where('page', 'footer_3')->paginate(3);
      $footer_4_Block = DB::table('blocks')->where('page', 'footer_4')->paginate(3) ;

      $block = DB::table('blocks')->paginate();

      return view('dashboard.admin.themes.blocks', compact('block', 'indexBlock', 'aboutBlock', 'promoBlock', 'contactBlock', 'footer_1_Block', 'footer_2_Block', 'footer_3_Block', 'footer_4_Block'));
    }

    public function createBlock()
    {
      return view('dashboard.admin.themes.create');
    }

    public function storeBlock(Request $request)
    {
      $block = new Block;

      $block->title = $request->title;
      $block->page = $request->page;
      $block->body = $request->post;
      $block->save();

      return redirect('theme/blocks')->with('message', 'Se ha creado el bloque con el ID: ' . $block->id . ' exitosamente, en la sección ' . $block->page . '.');
    }

    public function editBlock($id)
    {
      $block = Block::find($id);

      return view('dashboard.admin.themes.edit', compact('block'));
    }

    public function updateBlock(Request $request, $id)
    {
      $block = Block::findOrFail($id);

      $block->title = $request->title;
      $block->page = $request->page;
      $block->body = $request->post;

      $block->save();
      return redirect('theme/blocks')->with('message', 'Se ha editado el bloque con el ID: ' . $block->id . ' exitosamente, en la sección ' . $block->page . '.');


    }

    public function destroyBlock($id)
    {
      $block = Block::find($id);
      $block->delete();

      return redirect('theme/blocks')->with('message', 'El bloque ' . $block->id . ' ha sido eliminado');

    }

}
