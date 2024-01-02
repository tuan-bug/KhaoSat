<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Questionfive;
use App\Models\Questionfour;
use App\Models\Questionthree;
use App\Models\Questiontwo;
use Illuminate\Http\Request;

class StatisticalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = [];

        for ($i = 1; $i <= 8; $i++) {
            $answers = [
                1 => Question::where('id_question', $i)->where('answer', 1)->count(),
                2 => Question::where('id_question', $i)->where('answer', 2)->count(),
                3 => Question::where('id_question', $i)->where('answer', 3)->count(),
            ];

            $results[$i] = $answers;
        }
        $questions = [
            '1. Chính sách về phát triển kinh tế - xã hội',
            '2. Chính sách về khám, chữa bệnh'		,
            '3. Chính sách về giáo dục phổ thông',
            '4. Chính sách về trật tự, an toàn xã hội',
            '5. Chính sách về giao thông đường bộ',
            '6. Chính sách về điện sinh hoạt'	,
            '7. Chính sách về nước sinh hoạt'	,
            '8. Chính sách về an sinh, xã hội',
        ];

        $result2 = [];

        for ($i = 1; $i < 2; $i++) {
            $answers = [
                '1. Qua loa phát thanh xã.' => Questiontwo::where('id_question', $i)->where('answer', 1)->count(),
                '2. Qua họp, sinh hoạt, thông báo tại khu dân cư.' => Questiontwo::where('id_question', $i)->where('answer', 2)->count(),
                '3. Qua cơ quan nhà nước, công chức.' => Questiontwo::where('id_question', $i)->where('answer', 3)->count(),
                '4. Qua người thân, bạn bè.' => Questiontwo::where('id_question', $i)->where('answer', 4)->count(),
                '5. Qua đài, ti vi, báo chí.' => Questiontwo::where('id_question', $i)->where('answer', 5)->count(),
                '6. Qua mạng internet.' => Questiontwo::where('id_question', $i)->where('answer', 6)->count(),
                '7. Qua hình thức khác.' => Questiontwo::where('id_question', $i)->where('answer', 7)->count(),

            ];

            $result2[$i] = $answers;
        }

        $result3 = [];

        for ($i = 1; $i < 2; $i++) {
            $answers = [
                '1. Không thể tham gia, vì không biết thông tin.' => Questiontwo::where('id_question', 2)->where('answer', 1)->count(),
                '2. Không thể tham gia, vì bản thân không muốn.' => Questiontwo::where('id_question', 2)->where('answer', 2)->count(),
                '3. Có thể tham gia, nếu được biết thông tin.' => Questiontwo::where('id_question', 2)->where('answer', 3)->count(),
                '4. Có thể tham gia, nếu được tạo điều kiện thuận tiện.' => Questiontwo::where('id_question', 2)->where('answer', 4)->count(),
                '5. Chắc chắn tham gia, vì bản thân mong muốn.' => Questiontwo::where('id_question', 2)->where('answer', 5)->count(),
            ];

            $result3[$i] = $answers;
        }


        $result4 = [];

        for ($i = 1; $i < 2; $i++) {
            $answers = [
                '1. Không có công chức nào gây phiền hà, sách nhiễu cho người dân.' => Questiontwo::where('id_question', 3)->where('answer', 1)->count(),
                '2. Một số công chức gây phiền hà, sách nhiễu cho người dân.' => Questiontwo::where('id_question', 3)->where('answer', 2)->count(),
                '3. Nhiều công chức gây phiền hà, sách nhiễu cho người dân' => Questiontwo::where('id_question', 3)->where('answer', 3)->count(),
            ];

            $result4[$i] = $answers;
        }

        $result5 = [];

        for ($i = 1; $i < 2; $i++) {
            $answers = [
                '1. Qua loa phát thanh xã..' => Questiontwo::where('id_question', 4)->where('answer', 1)->count(),
                '2. Không có người dân nào phải đưa tiền ngoài quy định cho công chức.' => Questiontwo::where('id_question', 4)->where('answer', 2)->count(),
                '3. Một số người dân phải đưa tiền ngoài quy định cho công chức.' => Questiontwo::where('id_question', 4)->where('answer', 3)->count(),
                '4. Nhiều người dân phải đưa tiền ngoài quy định cho công chức.' => Questiontwo::where('id_question', 4)->where('answer', 4)->count(),
            ];

            $result5[$i] = $answers;
        }

        $result6 = [];

        for ($i = 1; $i < 2; $i++) {
            $answers = [
                '1. Theo hình thức trực tiếp (tại cơ quan).' => Questiontwo::where('id_question', 5)->where('answer', 1)->count(),
                '2. Theo hình thức trực tuyến (qua mạng internet.' => Questiontwo::where('id_question', 5)->where('answer', 2)->count(),
                '3. Theo cả hình thức trực tiếp và trực tuyến.' => Questiontwo::where('id_question', 5)->where('answer', 3)->count(),
            ];

            $result6[$i] = $answers;
        }

        $result7 = [];

        for ($i = 1; $i < 2; $i++) {
            $answers = [
                '1. Theo hình thức trực tiếp (tại cơ quan).' => Questiontwo::where('id_question', 6)->where('answer', 1)->count(),
                '2. Theo hình thức trực tuyến (qua mạng internet.' => Questiontwo::where('id_question', 6)->where('answer', 2)->count(),
                '3. Theo cả hình thức trực tiếp và trực tuyến.' => Questiontwo::where('id_question', 6)->where('answer', 3)->count(),
            ];

            $result7[$i] = $answers;
        }


        $result8 = [];

        for ($i = 1; $i < 8; $i++) {
            $answers = [
                1 => Questionthree::where('id_question', $i)->where('answer', 1)->count(),
                2 => Questionthree::where('id_question', $i)->where('answer', 2)->count(),
            ];

            $result8[$i] = $answers;
        }
        $cacCauHoi8 = [
            "1. Có người thân đang đi học phổ thông",
            "2. Bản thân hoặc có người thân gần đây đi khám, chữa bệnh tại bệnh viện, phòng khám đa khoa công lập, ở tuyến tỉnh, huyện, trạm y tế ở xã, phường.",
            "3. Giải quyết công việc với cơ quan nhà nước (các cấp)"	,
            "4. Giải quyết thủ tục hành chính"	,
            "5. Phản ánh, kiến nghị với cơ quan nhà nước (các cấp)	"	,
            "6. Góp ý kiến đối với cơ quan nhà nước (các cấp) về chính sách",
            "7. Phản hồi ý kiến đối với cơ quan nhà nước về kết quả thực hiện chính sách, kết quả thực hiện giải quyết thủ tục hành chính của các chính quyền",
        ];


        $result9 = [];

        for ($i = 1; $i < 34; $i++) {
            $answers = [
                1 => Questionfour::where('id_question', $i)->where('answer', 1)->count(),
                2 => Questionfour::where('id_question', $i)->where('answer', 2)->count(),
                3 => Questionfour::where('id_question', $i)->where('answer', 3)->count(),
                4 => Questionfour::where('id_question', $i)->where('answer', 4)->count(),
                5 => Questionfour::where('id_question', $i)->where('answer', 5)->count(),

            ];

            $result9[$i] = $answers;
        }

        $cacCauHoi9 = [
            "1. Cơ quan nhà nước cung cấp, giải thích thông tin về các chính sách theo nhiều hình thức, giúp mọi người dân dễ tìm, dễ thấy"	,
            "2. Cơ quan nhà nước cung cấp thông tin về các chính sách đầy đủ, dễ hiểu đối với người dân"	,

            "3. Cơ quan nhà nước tổ chức xin ý kiến góp ý của người dân đối với các chính sách theo nhiều hình thức, giúp mọi người dân tham gia góp ý kiến dễ dàng		",
            "4. Cơ quan nhà nước tổ chức nhiều hình thức để người dân phản hồi ý kiến về kết quả, tác động của các chính sách, giúp người dân tham gia phản hồi ý kiến dễ dàng	",

            "5. Chính sách về phát triển kinh tế - xã hội ở địa phương phù hợp . (Gồm các quy định về thu hút đầu tư, kinh doanh, việc làm, tín dụng…)"	,
            "6. Chính sách về khám chữa bệnh phù hợp. (Gồm các quy định về bệnh viện, phòng khám, trạm y tế; việc khám, chữa bệnh; bảo hiểm y tế; về viện phí… ở các bệnh viện công, phòng khám công, trạm y tế	",
            "7. Chính sách về giáo dục phổ thông phù hợp. (Gồm các quy định về chương trình giảng dạy, sách giáo khoa, trường học, lớp học, đánh giá học sinh, thủ tục nhập học … ở các trường phổ thông công lập)",
            "8. Chính sách trật tự, an toàn xã hội phù hợp. (Gồm các quy định về quản lý dân cư, giữ gìn trật tự nơi công cộng, quản lý an ninh mạng; phòng chống tội phạm…)	",
            "9. Chính sách về giao thông đường bộ phù hợp. (Gồm các quy định về xây dựng, phát triển đường bộ; giao thông đường bộ; bảo đảm trật tự, an toàn giao thông đường bộ …)		",
            "10. Chính sách về điện sinh hoạt phù hợp. (Gồm các quy định về cung cấp, quản lý, phát triển điện sinh hoạt; giá tiền, chất lượng điện sinh hoạt …)	",
            "11. Chính sách về nước sinh hoạt phù hợp. (Gồm các quy định về cung cấp, quản lý, phát triển nước sinh hoạt; giá tiền, chất lượng nước sinh hoạt …)	",
            "12. Chính sách về an sinh xã hội phù hợp. (Gồm các quy định về bảo hiểm xã hội, bảo hiểm thất nghiệp; hỗ trợ thường xuyên đối với người có công, người nghèo, người tàn tật… và hỗ trợ đột xuất cho người dân khi gặp mất mùa, thiên tai …)",

            "13. Chính sách của địa phương đã góp phần giúp cho kinh tế gia đình của người dân địa phương ngày càng tốt hơn trong thời gian qua.",
            "14. Chính sách của địa phương đã góp phần giúp cho chất lượng cuộc sống của người dân địa phương ngày càng tốt hơn trong thời gian qua.",


            "15. Cơ quan cung cấp thông tin về việc giải quyết thủ tục hành chính theo nhiều hình thức, dễ tiếp cận, dễ hiểu đối với mọi người dân.",
            "16. Trụ sở cơ quan tiếp nhận hồ sơ, trả kết quả giải quyết thủ tục hành chính có biển hiệu, hướng dẫn rõ ràng, dễ thấy.",
            "17. Trụ sở cơ quan tiếp nhận hồ sơ, trả kết quả giải quyết thủ tục hành chính sạch sẽ, văn minh.",
            "18. Trang thiết bị phục vụ người dân đầy đủ, chất lượng tốt, giúp người dân giải quyết công việc dễ dàng hơn.",

            "19. Quy định thủ tục hành chính được niêm yết công khai tại trụ sở cơ quan tiếp nhận hồ sơ, trả kết quả giải quyết thủ tục hành chính dễ thấy, dễ hiểu.",
            "20. Thành phần hồ sơ người dân phải nộp là đúng quy định		",
            "21. Mức phí/lệ phí người dân phải nộp là đúng quy định.",
            "22. Thời hạn giải quyết thủ tục hành chính cho người dân là đúng quy định.",

            "23. Công chức có thái độ giao tiếp lịch sự, tôn trọng đối với người dân.",
            "24. Công chức cung cấp thông tin, trả lời kịp thời, đầy đủ các câu hỏi, ý kiến của người dân.",
            "25. Công chức hướng dẫn hồ sơ dễ hiểu, đảm bảo người dân có thể hoàn thiện hồ sơ sau một lần hướng dẫn.",
            "26. Công chức tuân thủ đúng quy định trong giải quyết công việc cho người dân.",
            "27. Công chức tận tình đối với người dân trong quá trình giải quyết công việc.",

            "28. Kết quả giải quyết thủ tục hành chính cho người dân được trả đúng hẹn.",
            "29. Kết quả giải quyết thủ tục hành chính cho người dân có thông tin đầy đủ, chính xác	",
            "30. Kết quả giải quyết thủ tục hành chính cho người dân đảm bảo tính công bằng.",

            "31. Cơ quan có bố trí hình thức tiếp nhận phản ánh, kiến nghị, giúp người dân phản ánh, kiến nghị dễ dàng",
            "32. Cơ quan tiếp nhận, xử lý phản ánh, kiến nghị của người dân đúng quy định.",
            "33. Cơ quan thông báo kết quả xử lý phản ánh kiến nghị cho người dân kịp thời.",
        ];


        $result10 = [];

        for ($i = 1; $i < 11; $i++) {
            $answers = [
                1 => Questionfive::where('id_question', $i)->where('answer', 1)->count(),
                2 => Questionfive::where('id_question', $i)->where('answer', 2)->count(),
                3 => Questionfive::where('id_question', $i)->where('answer', 3)->count(),
            ];

            $result10[$i] = $answers;
        }

        $cacCauHoi10 = [
            "1. Nâng cao hơn nữa chất lượng cung cấp thông tin cho người dân	"	,
            "2. Nâng cao hơn nữa chất lượng trụ sở, trang thiết bị phục vụ giải quyết công việc cho người người dân.",
            "3. Nâng cao hơn nữa năng lực của cán bộ, công chức, viên chức trong giải quyết công việc cho người dân.",
            "4. Nâng cao hơn nữa thái độ phục vụ của cán bộ, công chức, viên chức đối với người dân.",
            "5. Tăng cường ứng dụng công nghệ thông tin, chuyển đổi số trong giải quyết công việc cho người dân.",
            "6. Nâng cao hơn nữa sự quan tâm của cơ quan nhà nước đối với nhu cầu, mong đợi của người dân.",
            "7. Nâng cao hơn nữa chất lượng tiếp nhận, giải quyết ý kiến góp ý, phản ánh, kiến nghị của người dân.",
            "9. Nâng cao hơn nữa chất lượng các chính sách quan trọng đối với đời sồng của người dân.",
            "10. Nâng cao hơn nữa chất lượng dịch vụ hành chính công (việc giải quyết thủ tục hành chính).",
        ];

//        dd($result9);


        return view('statistical', compact('results', 'questions', 'result2','result3', 'result4','result5',
            'result6', 'result7','result8', 'cacCauHoi8', 'result9', 'cacCauHoi9', 'result10', 'cacCauHoi10'));

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
