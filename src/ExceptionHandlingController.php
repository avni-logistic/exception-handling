<?php
    namespace Logistic\Exceptionhandling;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use Yajra\Datatables\Datatables;
    use Logistic\Exceptionhandling\Models\ExceptionLog;

    class ExceptionHandlingController extends Controller {

        public function index()
        {
           return view('exceptionhandling::exception');
        }

        public function datatable()
        {
            $exceptions = ExceptionLog::select("*");
            return Datatables::of($exceptions)->make(true);
        }
        public static function exception($test)
        {
            ExceptionLog::create(['exception' => $test]);
        }


    }
