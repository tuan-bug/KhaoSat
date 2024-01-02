<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Question;
use App\Models\Questionfive;
use App\Models\Questionfour;
use App\Models\Questionthree;
use App\Models\Questiontwo;
use App\Models\Review;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('formKS');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = new Customer();

        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        $customer->phone = $request->input('phone');
        $customer->city = $request->input('city');
        $customer->district = $request->input('district');
        $customer->commune = $request->input('commune');
        $customer->village = $request->input('village');

        $gender = $request->input('gender');
        if($gender == 1){
            $customer->gender = "Nam";
        }else{
            $customer->gender = "Nữ";
        }
        $age = $request->input('age');
        if ($age == 1) {
            $customer->age = "18 - 25 tuổi";
        } elseif ($age == 2) {
            $customer->age = "25 - 34 tuổi";
        } elseif ($age == 3) {
            $customer->age = "35 - 49 tuổi";
        } elseif ($age == 4) {
            $customer->age = "50 - 60 tuổi";
        } elseif ($age == 5) {
            $customer->age = "Trên 60 tuổi";
        } else {
            // Xử lý trường hợp không có độ tuổi được chọn
        }
        // Xử lý trường dân tộc
        $ethnicityValue = $request->input('ethnicity');
        if ($ethnicityValue == '2') {
            $customer->ethnicity = $request->input('other_ethnicity');
        } else {
            $customer->ethnicity = "Kinh";
        }

        // Kiểm tra nếu người dùng chọn tùy chọn "Khác" cho trình độ học vấn
        $literacy = $request->input('literacy');

        if ($literacy == 1) {
            $customer->literacy = "Tiểu học (Cấp I)";
        } elseif ($literacy == 2) {
            $customer->literacy = "Trung học cơ sở (Cấp II)";
        } elseif ($literacy == 3) {
            $customer->literacy = "Trung học phổ thông (Cấp III)";
        } elseif ($literacy == 4) {
            $customer->literacy = "Dạy nghề/Trung cấp/Cao đẳng";
        } elseif ($literacy == 5) {
            $customer->literacy = "Đại học/Trên Đại học";
        } elseif ($literacy == 6) {
            // Nếu chọn "Khác", sử dụng dữ liệu từ trường nhập liệu "other_literacy"
            $otherLiteracy = $request->input('other_literacy');
            $customer->literacy = $otherLiteracy;
        } else {
            // Xử lý trường hợp không có trình độ học vấn được chọn
        }

        // Kiểm tra nếu người dùng chọn tùy chọn "Khác" cho nghề nghiệp
        $occupation = $request->input('occupation');

        if ($occupation == 1) {
            $customer->occupation = "Nghỉ hưu";
        } elseif ($occupation == 2) {
            $customer->occupation = "Không đi làm (ở nhà)";
        } elseif ($occupation == 3) {
            $customer->occupation = "Làm công việc tự do (không ký hợp đồng lao động)";
        } elseif ($occupation == 4) {
            $customer->occupation = "Sinh viên";
        } elseif ($occupation == 5) {
            $customer->occupation = "Làm việc tại tổ chức, doanh nghiệp trong lĩnh vực tư";
        } elseif ($occupation == 6) {
            $customer->occupation = "Làm việc tại cơ quan, tổ chức, doanh nghiệp trong lĩnh vực công";
        } elseif ($occupation == 7) {
            // Nếu chọn "Khác", sử dụng dữ liệu từ trường nhập liệu "other_occupation"
            $otherOccupation = $request->input('other_occupation');
            $customer->occupation =  $otherOccupation;
        } else {
            // Xử lý trường hợp không có nghề nghiệp được chọn
        }

        $residenceType = $request->input('residence_type');

        if ($residenceType == 'urban') {
            $customer->residence_type = "Đô thị";
        } elseif ($residenceType == 'rural') {
            $customer->residence_type = "Nông thôn";
        } else {
            // Xử lý trường hợp không có loại nơi sinh sống được chọn
        }

        $specificResidence = $request->input('specific_residence');

        if ($specificResidence == 'urbanMountain') {
            $customer->specific_residence = "Miền núi";
        } elseif ($specificResidence == 'urbanPlain') {
            $customer->specific_residence = "Đồng bằng";
        } elseif ($specificResidence == 'urbanIsland') {
            $customer->specific_residence = "Hải đảo";
        } else {
            // Xử lý trường hợp không có nơi sinh sống cụ thể được chọn
        }

        $customer->save();


        // CÂU TRẢ LỜI 1

        $questions = [
            ['id_question' => 1, 'answer' => $request->input('question1')],
            ['id_question' => 2, 'answer' => $request->input('question2')],
            ['id_question' => 3, 'answer' => $request->input('question3')],
            ['id_question' => 4, 'answer' => $request->input('question4')],
            ['id_question' => 5, 'answer' => $request->input('question5')],
            ['id_question' => 6, 'answer' => $request->input('question6')],
            ['id_question' => 7, 'answer' => $request->input('question7')],
            ['id_question' => 8, 'answer' => $request->input('question8')],
        ];

        $customerId = $customer->id; // Giả sử đây là ID của khách hàng từ bạn

        foreach ($questions as $data) {
            $question = new Question();
            $question->id_user = $customer->id;
            $question->id_question = $data['id_question'];

            if($data['answer'] == "khong_quan_tam"){
                $question->answer = 1;
            }
            elseif($data['answer'] == "quan_tam"){
                $question->answer = 2;
            }
            elseif($data['answer'] == "rat_quan_tam"){
                $question->answer = 3;
            }
            else{
                #kệ
            }
            $question->save();
        }


        // CÂU TRẢ LỜI 2
        $answerValue = $request->input('question_two');
        $otherValue = $request->input('other_1');

        $question_2 = new Questiontwo();
        $question_2->id_question = 1; // ID của câu hỏi, bạn cần xác định ID tương ứng với câu hỏi này
        $question_2->id_customer = $customer->id; // Giả sử đây là ID của khách hàng từ bạn

        // Xử lý lưu dữ liệu từ radio hoặc ô input văn bản
        if ($answerValue == 6) { // Nếu chọn "Qua hình thức khác"
            $question_2->answer = $otherValue; // Lưu giá trị từ ô input văn bản
        } else {
            $question_2->answer = $answerValue; // Lưu giá trị từ radio button
        }
        $question_2->save();

        // CÂU TRẢ LỜI 3
        $answer3 = new Questiontwo();
        $answer3->id_question = 2; // ID của câu hỏi, bạn cần xác định ID tương ứng với câu hỏi này
        $answer3->id_customer = $customer->id;
        $answer3->answer = $request->input('question_three');
        $answer3->save();

        // CÂU TRẢ LỜI 4
        $answer4 = new Questiontwo();
        $answer4->id_question = 3; // ID của câu hỏi, bạn cần xác định ID tương ứng với câu hỏi này
        $answer4->id_customer = $customer->id;
        $answer4->answer = $request->input('question_four');
        $answer4->save();

        // CÂU TRẢ LỜI 5
        $answer5 = new Questiontwo();
        $answer5->id_question = 4; // ID của câu hỏi, bạn cần xác định ID tương ứng với câu hỏi này
        $answer5->id_customer = $customer->id;
        $answer5->answer = $request->input('question_five');
        $answer5->save();

        // CÂU TRẢ LỜI 6
        $answer6 = new Questiontwo();
        $answer6->id_question = 5; // ID của câu hỏi, bạn cần xác định ID tương ứng với câu hỏi này
        $answer6->id_customer = $customer->id;
        $answer6->answer = $request->input('question_six');
        $answer6->save();

        // CÂU TRẢ LỜI 7
        $answer7 = new Questiontwo();
        $answer7->id_question = 6; // ID của câu hỏi, bạn cần xác định ID tương ứng với câu hỏi này
        $answer7->id_customer = $customer->id;
        $answer7->answer = $request->input('question_seven');
        $answer7->save();


        // CÂU TRẢ LỜI 8

        $questions_8 = [
            ['id_question' => 1, 'answer' => $request->input('question81')],
            ['id_question' => 2, 'answer' => $request->input('question82')],
            ['id_question' => 3, 'answer' => $request->input('question83')],
            ['id_question' => 4, 'answer' => $request->input('question84')],
            ['id_question' => 5, 'answer' => $request->input('question85')],
            ['id_question' => 6, 'answer' => $request->input('question86')],
            ['id_question' => 7, 'answer' => $request->input('question87')],
        ];

        $customerId = $customer->id; // Giả sử đây là ID của khách hàng từ bạn

        foreach ($questions_8 as $data) {
            $question = new Questionthree();
            $question->id_customer = $customer->id;
            $question->id_question = $data['id_question'];

            if($data['answer'] == "co"){
                $question->answer = 1;
            }
            elseif($data['answer'] == "khong"){
                $question->answer = 2;
            }
            else{
                #kệ
            }
            $question->save();
        }


        // CÂU TRẢ LỜI 9

        $questions_9 = [
            ['id_question' => 1, 'answer' => $request->input('question91')],
            ['id_question' => 2, 'answer' => $request->input('question92')],
            ['id_question' => 3, 'answer' => $request->input('question93')],
            ['id_question' => 4, 'answer' => $request->input('question94')],
            ['id_question' => 5, 'answer' => $request->input('question95')],
            ['id_question' => 6, 'answer' => $request->input('question96')],
            ['id_question' => 7, 'answer' => $request->input('question97')],
            ['id_question' => 8, 'answer' => $request->input('question98')],
            ['id_question' => 9, 'answer' => $request->input('question99')],
            ['id_question' => 10, 'answer' => $request->input('question901')],

            ['id_question' => 11, 'answer' => $request->input('question902')],
            ['id_question' => 12, 'answer' => $request->input('question903')],
            ['id_question' => 13, 'answer' => $request->input('question904')],
            ['id_question' => 14, 'answer' => $request->input('question905')],
            ['id_question' => 15, 'answer' => $request->input('question906')],
            ['id_question' => 16, 'answer' => $request->input('question907')],
            ['id_question' => 17, 'answer' => $request->input('question908')],
            ['id_question' => 18, 'answer' => $request->input('question909')],
            ['id_question' => 19, 'answer' => $request->input('question910')],
            ['id_question' => 20, 'answer' => $request->input('question911')],

            ['id_question' => 21, 'answer' => $request->input('question912')],
            ['id_question' => 22, 'answer' => $request->input('question913')],
            ['id_question' => 23, 'answer' => $request->input('question914')],
            ['id_question' => 24, 'answer' => $request->input('question915')],
            ['id_question' => 25, 'answer' => $request->input('question916')],
            ['id_question' => 26, 'answer' => $request->input('question917')],
            ['id_question' => 27, 'answer' => $request->input('question918')],
            ['id_question' => 28, 'answer' => $request->input('question919')],
            ['id_question' => 29, 'answer' => $request->input('question920')],
            ['id_question' => 30, 'answer' => $request->input('question921')],

            ['id_question' => 31, 'answer' => $request->input('question922')],
            ['id_question' => 32, 'answer' => $request->input('question923')],
            ['id_question' => 33, 'answer' => $request->input('question924')],


        ];

        $customerId = $customer->id; // Giả sử đây là ID của khách hàng từ bạn

        foreach ($questions_9 as $data) {
            $question = new Questionfour();
            $question->id_customer = $customer->id;
            $question->id_question = $data['id_question'];
            if($data['answer'] == "rat_khong_hai_long"){
                $question->answer = 1;
            }
            elseif($data['answer'] == "khong_hai_long"){
                $question->answer = 2;
            }
            elseif($data['answer'] == "binh_thuong"){
                $question->answer = 3;
            }
            elseif($data['answer'] == "hai_long"){
                $question->answer = 4;
            }
            elseif($data['answer'] == "rat_hai_long"){
                $question->answer = 5;
            }
            else {
                #Hahaha
            }

            $question->save();
        }


        // CÂU TRẢ LỜI 8

        $questions_10 = [
            ['id_question' => 1, 'answer' => $request->input('question108')],
            ['id_question' => 2, 'answer' => $request->input('question101')],
            ['id_question' => 3, 'answer' => $request->input('question102')],
            ['id_question' => 4, 'answer' => $request->input('question103')],
            ['id_question' => 5, 'answer' => $request->input('question104')],
            ['id_question' => 6, 'answer' => $request->input('question105')],
            ['id_question' => 7, 'answer' => $request->input('question106')],
            ['id_question' => 8, 'answer' => $request->input('question107')],
            ['id_question' => 9, 'answer' => $request->input('question108')],
        ];

        $customerId = $customer->id; // Giả sử đây là ID của khách hàng từ bạn

        foreach ($questions_10 as $data) {
            $question = new Questionfive();
            $question->id_customer = $customer->id;
            $question->id_question = $data['id_question'];

            if($data['answer'] == "rat_nhieu"){
                $question->answer = 1;
            }
            elseif($data['answer'] == "nhieu"){
                $question->answer = 2;
            }
            elseif($data['answer'] == "it"){
                $question->answer = 3;
            }
            else{
                #kệ
            }
            $question->save();
        }


        $review = new Review();
        $review->id_customer = $customer->id;
        $review->content = $request->input('reviews');
        $review->save();

        return redirect('thank');
//        dd($customer);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::find($id);
        $cau_1 = Question::where('id_user', $customer->id)->get();
        $cau_27 = Questiontwo::where('id_customer', $customer->id)->get();
        $cau_2 = Questiontwo::where('id_customer', $customer->id)->first();
        $cau_3 = Questiontwo::where('id_customer', $customer->id)->take(2)->get()->last();
        $cau_4 = Questiontwo::where('id_customer', $customer->id)->skip(2)->first();
        $cau_5 = Questiontwo::where('id_customer', $customer->id)->skip(3)->first();
        $cau_6 = Questiontwo::where('id_customer', $customer->id)->skip(4)->first();
        $cau_7 = Questiontwo::where('id_customer', $customer->id)->latest()->first();
        //dd($cau_7['answer']);
        $cau_8 = Questionthree::where('id_customer', $customer->id)->get();
        $cau_9 = Questionfour::where('id_customer', $customer->id)->get();
        $cau_10 = Questionfive::where('id_customer', $customer->id)->get();
//        dd($cau_1);
        $cacCauHoi1 = [
            "1. Chính sách về phát triển kinh tế - xã hội",
            "2. Chính sách về khám, chữa bệnh",
            "3. Chính sách về giáo dục phổ thông",
            "4. Chính sách về trật tự, an toàn xã hội",
            "5. Chính sách về giao thông đường bộ",
            "6. Chính sách về điện sinh hoạt",
            "7. Chính sách về nước sinh hoạt",
            "8. Chính sách về an sinh, xã hội",
        ];

        $cacCauHoi8 = [
            "1. Có người thân đang đi học phổ thông",
            "2. Bản thân hoặc có người thân gần đây đi khám, chữa bệnh tại bệnh viện, phòng khám đa khoa công lập, ở tuyến tỉnh, huyện, trạm y tế ở xã, phường.",
            "3. Giải quyết công việc với cơ quan nhà nước (các cấp)"	,
            "4. Giải quyết thủ tục hành chính"	,
            "5. Phản ánh, kiến nghị với cơ quan nhà nước (các cấp)	"	,
            "6. Góp ý kiến đối với cơ quan nhà nước (các cấp) về chính sách",
            "7. Phản hồi ý kiến đối với cơ quan nhà nước về kết quả thực hiện chính sách, kết quả thực hiện giải quyết thủ tục hành chính của các chính quyền",
        ];

        $cacCauHoi9 = [
            "1. Cơ quan nhà nước cung cấp, giải thích thông tin về các chính sách theo nhiều hình thức, giúp mọi người dân dễ tìm, dễ thấy"	,
            "2. Cơ quan nhà nước cung cấp thông tin về các chính sách đầy đủ, dễ hiểu đối với người dân"	,
        ];
        $cacCauHoi9b = [
            "3. Cơ quan nhà nước tổ chức xin ý kiến góp ý của người dân đối với các chính sách theo nhiều hình thức, giúp mọi người dân tham gia góp ý kiến dễ dàng		",
            "4. Cơ quan nhà nước tổ chức nhiều hình thức để người dân phản hồi ý kiến về kết quả, tác động của các chính sách, giúp người dân tham gia phản hồi ý kiến dễ dàng	",
        ];
        $cacCauHoi9c = [
            "5. Chính sách về phát triển kinh tế - xã hội ở địa phương phù hợp . (Gồm các quy định về thu hút đầu tư, kinh doanh, việc làm, tín dụng…)"	,
            "6. Chính sách về khám chữa bệnh phù hợp. (Gồm các quy định về bệnh viện, phòng khám, trạm y tế; việc khám, chữa bệnh; bảo hiểm y tế; về viện phí… ở các bệnh viện công, phòng khám công, trạm y tế	",
            "7. Chính sách về giáo dục phổ thông phù hợp. (Gồm các quy định về chương trình giảng dạy, sách giáo khoa, trường học, lớp học, đánh giá học sinh, thủ tục nhập học … ở các trường phổ thông công lập)",
            "8. Chính sách trật tự, an toàn xã hội phù hợp. (Gồm các quy định về quản lý dân cư, giữ gìn trật tự nơi công cộng, quản lý an ninh mạng; phòng chống tội phạm…)	",
            "9. Chính sách về giao thông đường bộ phù hợp. (Gồm các quy định về xây dựng, phát triển đường bộ; giao thông đường bộ; bảo đảm trật tự, an toàn giao thông đường bộ …)		",
            "10. Chính sách về điện sinh hoạt phù hợp. (Gồm các quy định về cung cấp, quản lý, phát triển điện sinh hoạt; giá tiền, chất lượng điện sinh hoạt …)	",
            "11. Chính sách về nước sinh hoạt phù hợp. (Gồm các quy định về cung cấp, quản lý, phát triển nước sinh hoạt; giá tiền, chất lượng nước sinh hoạt …)	",
            "12. Chính sách về an sinh xã hội phù hợp. (Gồm các quy định về bảo hiểm xã hội, bảo hiểm thất nghiệp; hỗ trợ thường xuyên đối với người có công, người nghèo, người tàn tật… và hỗ trợ đột xuất cho người dân khi gặp mất mùa, thiên tai …)",
        ];

        $cacCauHoi9d = [
            "13. Chính sách của địa phương đã góp phần giúp cho kinh tế gia đình của người dân địa phương ngày càng tốt hơn trong thời gian qua.",
            "14. Chính sách của địa phương đã góp phần giúp cho chất lượng cuộc sống của người dân địa phương ngày càng tốt hơn trong thời gian qua.",

        ];

        $cacCauHoi91 = [
            "15. Cơ quan cung cấp thông tin về việc giải quyết thủ tục hành chính theo nhiều hình thức, dễ tiếp cận, dễ hiểu đối với mọi người dân.",
            "16. Trụ sở cơ quan tiếp nhận hồ sơ, trả kết quả giải quyết thủ tục hành chính có biển hiệu, hướng dẫn rõ ràng, dễ thấy.",
            "17. Trụ sở cơ quan tiếp nhận hồ sơ, trả kết quả giải quyết thủ tục hành chính sạch sẽ, văn minh.",
            "18. Trang thiết bị phục vụ người dân đầy đủ, chất lượng tốt, giúp người dân giải quyết công việc dễ dàng hơn.",
        ];

        $cacCauHoi92 = [
            "19. Quy định thủ tục hành chính được niêm yết công khai tại trụ sở cơ quan tiếp nhận hồ sơ, trả kết quả giải quyết thủ tục hành chính dễ thấy, dễ hiểu.",
            "20. Thành phần hồ sơ người dân phải nộp là đúng quy định		",
            "21. Mức phí/lệ phí người dân phải nộp là đúng quy định.",
            "22. Thời hạn giải quyết thủ tục hành chính cho người dân là đúng quy định.",
        ];

        $cacCauHoi93 = [
            "23. Công chức có thái độ giao tiếp lịch sự, tôn trọng đối với người dân.",
            "24. Công chức cung cấp thông tin, trả lời kịp thời, đầy đủ các câu hỏi, ý kiến của người dân.",
            "25. Công chức hướng dẫn hồ sơ dễ hiểu, đảm bảo người dân có thể hoàn thiện hồ sơ sau một lần hướng dẫn.",
            "26. Công chức tuân thủ đúng quy định trong giải quyết công việc cho người dân.",
            "27. Công chức tận tình đối với người dân trong quá trình giải quyết công việc.",
        ];

        $cacCauHoi94 = [
            "28. Kết quả giải quyết thủ tục hành chính cho người dân được trả đúng hẹn.",
            "29. Kết quả giải quyết thủ tục hành chính cho người dân có thông tin đầy đủ, chính xác	",
            "30. Kết quả giải quyết thủ tục hành chính cho người dân đảm bảo tính công bằng.",
        ];

        $cacCauHoi95 = [
            "31. Cơ quan có bố trí hình thức tiếp nhận phản ánh, kiến nghị, giúp người dân phản ánh, kiến nghị dễ dàng",
            "32. Cơ quan tiếp nhận, xử lý phản ánh, kiến nghị của người dân đúng quy định.",
            "33. Cơ quan thông báo kết quả xử lý phản ánh kiến nghị cho người dân kịp thời.",
        ];

        $cacCauHoi10 = [
            "1. Nâng cao hơn nữa chất lượng cung cấp thông tin cho người dân	"	,
            "2. Nâng cao hơn nữa chất lượng trụ sở, trang thiết bị phục vụ giải quyết công việc cho người người dân.",
            "3. Nâng cao hơn nữa năng lực của cán bộ, công chức, viên chức trong giải quyết công việc cho người dân.",
            "4. Nâng cao hơn nữa thái độ phục vụ của cán bộ, công chức, viên chức đối với người dân.",
            " 5. Tăng cường ứng dụng công nghệ thông tin, chuyển đổi số trong giải quyết công việc cho người dân.",
           " 6. Nâng cao hơn nữa sự quan tâm của cơ quan nhà nước đối với nhu cầu, mong đợi của người dân.",
            " 7. Nâng cao hơn nữa chất lượng tiếp nhận, giải quyết ý kiến góp ý, phản ánh, kiến nghị của người dân.",
            "9. Nâng cao hơn nữa chất lượng các chính sách quan trọng đối với đời sồng của người dân.",
            "10. Nâng cao hơn nữa chất lượng dịch vụ hành chính công (việc giải quyết thủ tục hành chính).",
        ];

        $cau_9_array = $cau_9->toArray();
        $cau_9a = array_slice($cau_9_array, 0, 2);
        $cau_9b = array_slice($cau_9_array, 2, 2);
        $cau_9c = array_slice($cau_9_array, 4, 8);
        $cau_9d = array_slice($cau_9_array, 12, 2);
//        dd($cau_9d);

        $cau_91 = array_slice($cau_9_array, 14, 4);
        $cau_92 = array_slice($cau_9_array, 18, 4);
        //dd($cau_92);
        $cau_93 = array_slice($cau_9_array, 22, 5);
        $cau_94 = array_slice($cau_9_array, 27, 3);
        $cau_95 = array_slice($cau_9_array, 30, 3);
//        dd($cau_9b);

        return view('showForm', compact('customer', 'cau_1', 'cau_27', 'cau_8', 'cau_9', 'cau_10', 'cacCauHoi10', 'cacCauHoi1', 'cacCauHoi8',
            'cacCauHoi9', 'cau_9a', 'cacCauHoi9b', 'cau_9b',
            'cau_9c', 'cacCauHoi9c', 'cau_9d', 'cacCauHoi9d',
            'cau_91', 'cacCauHoi91', 'cau_92', 'cacCauHoi92',
            'cau_93', 'cacCauHoi93' ,'cau_94', 'cacCauHoi94' ,
            'cau_95', 'cacCauHoi95', 'cau_2', 'cau_3', 'cau_4', 'cau_5','cau_6', 'cau_7'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
