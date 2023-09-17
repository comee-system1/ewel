<?PHP
require_once(D_PATH_HOME."t/lib/include_ba.php");
$obj = new BAmethod();
ini_set('display_errors', "On");
switch($language){
case "2":
		$array_exam[1] = array(
			"1"=>array(
					"a"=>"自己有普通人以上的智力",
					"b"=>"与朋友一起度过快乐的时光",
				),
			"2"=>array(
					"a"=>"经常考虑自己为什么会有这样的心情",
					"b"=>"被要求重做时，如果此指责是正确的，那么会自愿进行重做",
				),
			"3"=>array(
					"a"=>"即使处于困境，也会觉得总会有办法的",
					"b"=>"我的意见经常被朋友认可",
				),
			"4"=>array(
					"a"=>"「生气了」或是「不愉快」会经常认识自己的感情 ",
					"b"=>"即使处于困境，也会觉得总会有办法的",
				),
			"5"=>array(
					"a"=>"下定决心，将来一定要做大事",
					"b"=>"擅长耐心地听别人讲话",
				),
			"6"=>array(
					"a"=>"被要求重做时，如果此指责是正确的，那么会自愿进行重做",
					"b"=>"不破坏气氛，并能条理清楚地主张自己的意见",
				),
			"7"=>array(
					"a"=>"不会在脸上表现出生气与不快，能够迅速地镇静",
					"b"=>"自己有普通人以上的智力",
				),
			"8"=>array(
					"a"=>"从微妙的表情与会话中，可以感受到对方心情的变化",
					"b"=>"不会在脸上表现出生气与不快，能够迅速地镇静",
				),
			"9"=>array(
					"a"=>"与朋友一起度过快乐的时光",
					"b"=>"从微妙的表情与会话中，可以感受到对方心情的变化",
				),
			"10"=>array(
					"a"=>"擅长耐心地听别人讲话",
					"b"=>"「生气了」或是「不愉快」会经常认识自己的感情 ",
				),
			);
	$array_exam[2] = array(
			"11"=>array(
					"a"=>"不破坏气氛，并能条理清楚地主张自己的意见",
					"b"=>"下定决心，将来一定要做大事",
				),
			"12"=>array(
					"a"=>"我的意见经常被朋友认可",
					"b"=>"经常考虑自己为什么会有这样的心情",
				),
			"13"=>array(
					"a"=>"时刻注意要在自己擅长的领域里决胜负",
					"b"=>"有自信说服反对者，且不伤害对方的面子",
				),
			"14"=>array(
					"a"=>"经常确认自己目前处于何种感情，如焦躁・恐惧・喜悦・悲伤等",
					"b"=>"只需要通过稍许的谈话，就能够掌握对方的爱好与性格",
				),
			"15"=>array(
					"a"=>"磨练自己的技能，不断地提高自己",
					"b"=>"不希望抢在朋友前面，作为自己的功绩",
				),
			"16"=>array(
					"a"=>"自己拥有获取成功所需要的能力",
					"b"=>"磨练自己的技能，不断地提高自己",
				),
			"17"=>array(
					"a"=>"能够战胜焦躁与恐惧，冷静地进行行动",
					"b"=>"计划郊游与聚餐等集会，喜欢做让朋友高兴的事",
				),
			"18"=>array(
					"a"=>"只需要通过稍许的谈话，就能够掌握对方的爱好与性格",
					"b"=>"有引领他人的力量",
				),
			"19"=>array(
					"a"=>"我相信与失败的恐惧相比，更期待成功的喜悦",
					"b"=>"时刻注意要在自己擅长的领域里决胜负",
				),
			"20"=>array(
					"a"=>"经常有人会与我商量烦恼的事情",
					"b"=>"我相信与失败的恐惧相比，更期待成功的喜悦",
				),
			);
	$array_exam[3] = array(
			"21"=>array(
					"a"=>"有自信说服反对者，且不伤害对方的面子",
					"b"=>"经常有人会与我商量烦恼的事情",
				),
			"22"=>array(
					"a"=>"计划郊游与聚餐等集会，喜欢做让朋友高兴的事",
					"b"=>"自己拥有获取成功所需要的能力",
				),
			"23"=>array(
					"a"=>"有引领他人的力量",
					"b"=>"能够战胜焦躁与恐惧，冷静地进行行动",
				),
			"24"=>array(
					"a"=>"不希望抢在朋友前面，作为自己的功绩",
					"b"=>"经常确认自己目前处于何种感情，如焦躁・恐惧・喜悦・悲伤等",
				),
			"25"=>array(
					"a"=>"经常考虑自己到底想做什么，是怎样的心情 ",
					"b"=>"在集团中发挥领导力",
				),
			"26"=>array(
					"a"=>"我喜欢自己，并能够给予自己肯定",
					"b"=>"爱掉眼泪，看见别人哭，自己也会感到悲伤哭泣",
				),
			"27"=>array(
					"a"=>"即使勃然大怒，也会下意识地不发火",
					"b"=>"重视团队合作",
				),
			"28"=>array(
					"a"=>"了解自己的弱点，在自己的弱项上不逞强",
					"b"=>"即使勃然大怒，也会下意识地不发火",
				),
			"29"=>array(
					"a"=>"能够随机应变地变换优先顺序快乐地处理课题",
					"b"=>"即使在有难伺候的客人的店里从事接待工作（临时工），也不觉得难受",
				),
			"30"=>array(
					"a"=>"爱掉眼泪，看见别人哭，自己也会感到悲伤哭泣",
					"b"=>"对于难以理解的说明，毫不犹豫地直率地进行提问 ",
				),
			);
	$array_exam[4] = array(

			"31"=>array(
					"a"=>"只要我努力，情况一定会好转的",
					"b"=>"经常考虑自己到底想做什么，是怎样的心情",
				),
			"32"=>array(
					"a"=>"即使在有难伺候的客人的店里从事接待工作（临时工），也不觉得难受",
					"b"=>"能够随机应变地变换优先顺序快乐地处理课题",
				),
			"33"=>array(
					"a"=>"在集团中发挥领导力",
					"b"=>"我能够迅速地认清真心话与客套话的不同",
				),
			"34"=>array(
					"a"=>"我能够迅速地认清真心话与客套话的不同",
					"b"=>"我喜欢自己，并能够给予自己肯定",
				),
			"35"=>array(
					"a"=>"重视团队合作",
					"b"=>"只要我努力，情况一定会好转的",
				),
			"36"=>array(
					"a"=>"对于难以理解的说明，毫不犹豫地直率地进行提问 ",
					"b"=>"了解自己的弱点，在自己的弱项上不逞强",
				),
			);
	
		$first = $array_flip_test_change[$first];

	break;
case "4":
		
    $array_exam[1] = array(
			"1"=>array(
					"a"=>"Bản thân mình có trí thông minh hơn người thường. ",
					"b"=>"Trải qua thời gian vui vẻ cùng với bạn bè thân.  ",
				),
			"2"=>array(
					"a"=>"Cứ hay suy nghĩ không biết tại sao mình lại có tâm trạng như thế này.",
					"b"=>"Cho dù bị yêu cầu làm lại, nếu như lời chỉ trích đó đúng thì sẽ tự mình làm lại.",
				),
			"3"=>array(
					"a"=>"Khi bị lâm vào hoàn cảnh bế tắc nhưng vẫn nghĩ là chắc qua được không sao. ",
					"b"=>"Ý kiến của tôi đa phần được phản ánh vào bạn bè thân.",
				),
			"4"=>array(
					"a"=>"đôi khi tự mình cũng biết là “ mình lại nổi giận nữa rồi ” hay là “ thật khó chịu ”.",
					"b"=>"Khi bị lâm vào hoàn cảnh bế tắc nhưng vẫn nghĩ là chắc qua được không sao. ",
				),
			"5"=>array(
					"a"=>"Tương lai ,định sẵn trong lòng là sẽ làm một công việc gì đó lớn lao.",
					"b"=>"Có khiếu lắng nghe câu chuyện của người khác nói. ",
				),
			"6"=>array(
					"a"=>"Cho dù bị yêu cầu làm lại, nếu như lời chỉ trích đó đúng thì sẽ tự mình làm lại.",
					"b"=>"Có thể lập luận ý kiến của mình một cách mạch lạc mà không làm phá đi bầu không khí xung quanh.",
				),
			"7"=>array(
					"a"=>"Có thể làm dịu cơn giận và bực mình mà không biểu lộ lên khuôn mặt. ",
					"b"=>"Bản thân mình có trí thông minh hơn người thường. ",
				),
			"8"=>array(
					"a"=>"Cảm nhận được những thay đổi cảm xúc của người đối diện từ những biểu hiện nhỏ nhặt của họ hay từ cuộc nói chuyện.",
					"b"=>"Có thể làm dịu cơn giận và bực mình mà không biểu lộ lên khuôn mặt. ",
				),
			"9"=>array(
					"a"=>"Trải qua thời gian vui vẻ cùng với bạn bè thân. ",
					"b"=>"Cảm nhận được những thay đổi cảm xúc của người đối diện từ những biểu hiện nhỏ nhặt của họ hay từ cuộc nói chuyện.",
				),
			"10"=>array(
					"a"=>"Có khiếu lắng nghe câu chuyện của người khác nói. ",
					"b"=>"đôi khi tự mình cũng biết là “ mình lại nổi giận nữa rồi ” hay là “ thật khó chịu ”.",
				),
			);
    
    	$array_exam[2] = array(
			"11"=>array(
					"a"=>"Có thể lập luận ý kiến của mình một cách mạch lạc mà không làm phá đi bầu không khí xung quanh.",
					"b"=>"Tương lai ,định sẵn trong lòng là sẽ làm một công việc gì đó lớn lao.",
				),
			"12"=>array(
					"a"=>"Ý kiến của tôi đa phần được phản ánh vào bạn bè thân. ",
					"b"=>"Cứ hay suy nghĩ không biết tại sao mình lại có tâm trạng như thế này.",
				),
			"13"=>array(
					"a"=>"Quyết tâm cố gắng để tranh thắng bại trong lĩnh vực mình thông thạo.",
					"b"=>"Tự tin trong việc thuyết phục người phản đối mà không làm mất mặt họ. ",
				),
			"14"=>array(
					"a"=>"Lúc nào cũng có thể đặt tên cho cảm xúc hiện tại của mình chẳng hạn như “nóng vội”/”lo sợ”/”vui sướng”/”đau buồn”.",
					"b"=>"Chỉ cần nói chuyện với người đối diện một chút thôi là có thể nắm bắt được sở thích và tính cách của họ. ",
				),
			"15"=>array(
					"a"=>"Rèn luyện kỹ năng của bản thân , thường xuyên nâng cao năng lực của mình.",
					"b"=>"Không muốn qua mặt bạn bè để giành lợi ích cho bản thân. ",
				),
			"16"=>array(
					"a"=>"Bản thân mình có năng lực đủ để thành công. ",
					"b"=>"Rèn luyện kỹ năng của bản thân , thường xuyên nâng cao năng lực của mình.",
				),
			"17"=>array(
					"a"=>"Có thể chiến thắng được sự nóng vội hay nỗi lo sợ để hành động một cách bình tĩnh. ",
					"b"=>"Thích lên kế hoạch những cuộc đi dã ngoại, gặp mặt ăn uống v.v. để làm cho bạn bè vui vẻ. ",
				),
			"18"=>array(
					"a"=>"Chỉ cần nói chuyện với người đối diện một chút thôi là có thể nắm bắt được sở thích và tính cách của họ. ",
					"b"=>"Có sức lôi kéo dẫn dắt ,cuốn hút người khác. ",
				),
			"19"=>array(
					"a"=>"Mong đợi và tin tưởng vào niềm vui thành công hơn là lo sợ thất bại.  ",
					"b"=>"Quyết tâm cố gắng để tranh thắng bại trong lĩnh vực mình thông thạo.",
				),
			"20"=>array(
					"a"=>"Hay được người khác bày tỏ nỗi lòng , xin tư vấn về những nỗi phiền não của họ. ",
					"b"=>"Mong đợi và tin tưởng vào niềm vui thành công hơn là lo sợ thất bại. ",
				),
			);

    
    
    $array_exam[3] = array(
			"21"=>array(
					"a"=>"Tự tin trong việc thuyết phục người phản đối mà không làm mất mặt họ. ",
					"b"=>"Hay được người khác bày tỏ nỗi lòng , xin tư vấn về những nỗi phiền não của họ. ",
				),
			"22"=>array(
					"a"=>"Thích lên kế hoạch những cuộc đi dã ngoại, gặp mặt ăn uống v.v. để làm cho bạn bè vui vẻ. ",
					"b"=>"Bản thân mình có năng lực đủ để thành công. ",
				),
			"23"=>array(
					"a"=>"Có sức lôi kéo dẫn dắt ,cuốn hút người khác. ",
					"b"=>"Có thể chiến thắng được sự nóng vội hay nỗi lo sợ để hành động một cách bình tĩnh. ",
				),
			"24"=>array(
					"a"=>"Không muốn qua mặt bạn bè để giành lợi ích cho bản thân. ",
					"b"=>"Lúc nào cũng có thể đặt tên cho cảm xúc hiện tại của mình chẳng hạn như “nóng vội”/”lo sợ”/”vui sướng”/”đau buồn”.",
				),
			"25"=>array(
					"a"=>"Luôn luôn suy nghĩ về việc bản thân mình thực sự muốn như thế nào, có tâm trạng như thế nào.",
					"b"=>"Phát huy tinh thần lãnh đạo trong tập thể. ",
				),
			"26"=>array(
					"a"=>"Tôi thích bản thân mình và chấp nhận bản thân mình một cách khẳng định.",
					"b"=>"Mau nước mắt và dễ khóc theo người khác. ",
				),
			"27"=>array(
					"a"=>"Không nổi nóng,giận dữ đến độ quên mất chính mình. ",
					"b"=>"Xem trọng tinh thần đồng đội. ",
				),
			"28"=>array(
					"a"=>"Biết khuyết điểm của bản thân mình và không cố tỏ ra rằng mình mạnh về điểm đó.",
					"b"=>"Không nổi nóng,giận dữ đến độ quên mất chính mình.",
				),
			"29"=>array(
					"a"=>"Có thể tùy cơ ứng biến thay đổi thứ tự ưu tiên để giải quyết vấn đề một cách suông sẻ.",
					"b"=>"Không cảm thấy khổ sở với công việc tiếp khách ở cửa hàng có những người khách khó tính (công việc bán thời gian)",
				),
			"30"=>array(
					"a"=>"Mau nước mắt và dễ khóc theo người khác.",
					"b"=>"Thẳng thắn hỏi lại không ngần ngại đối với những lời giải thích mà mình không hiểu.",
				),
			);
	
     
     	$array_exam[4] = array(

			"31"=>array(
					"a"=>"Nếu tôi cố gắng thì chắn chắn có thể làm cho tình hình tốt hơn. ",
					"b"=>"Luôn luôn suy nghĩ về việc bản thân mình thực sự muốn như thế nào, có tâm trạng như thế nào.",
				),
			"32"=>array(
					"a"=>"Không cảm thấy khổ sở với công việc tiếp khách ở cửa hàng có những người khách khó tính (công việc bán thời gian)",
					"b"=>"Có thể tùy cơ ứng biến thay đổi thứ tự ưu tiên để giải quyết vấn đề một cách suông sẻ. ",
				),
			"33"=>array(
					"a"=>"Phát huy tinh thần lãnh đạo trong tập thể. ",
					"b"=>"Tôi nhìn thấy ngay được sự khác biệt giữa lời thật lòng với những lời nói giả dối bề ngoài.  ",
				),
			"34"=>array(
					"a"=>"Tôi nhìn thấy ngay được sự khác biệt giữa lời thật lòng với những lời nói giả dối bề ngoài. ",
					"b"=>"Tôi thích bản thân mình và chấp nhận bản thân mình một cách khẳng định. ",
				),
			"35"=>array(
					"a"=>"Xem trọng tinh thần đồng đội. ",
					"b"=>"Nếu tôi cố gắng thì chắn chắn có thể làm cho tình hình tốt hơn.",
				),
			"36"=>array(
					"a"=>"Thẳng thắn hỏi lại không ngần ngại đối với những lời giải thích mà mình không hiểu.",
					"b"=>"Biết khuyết điểm của bản thân mình và không cố tỏ ra rằng mình mạnh về điểm đó.",
				),
			);
     
     

	
		//配列が12で来ているので41に変更
		$first = $array_flip_test_change[$first];

break;
default:
	$array_exam[1] = array(
			"1"=>array(
					"a"=>"自分には人並み以上の知力がある",
					"b"=>"仲間とはいっしょに楽しい時間を過ごす",
				),
			"2"=>array(
					"a"=>"自分が、なぜ、こんな気持ちになったのかを考えることが多い",
					"b"=>"やり直しを要求されても、その指摘が正しければ、進んでやり直す",
				),
			"3"=>array(
					"a"=>"窮地に立たされても、何とかなると思う",
					"b"=>"私の意見は仲間に反映されることが多い",
				),
			"4"=>array(
					"a"=>"「怒っているな」とか「不快だな」としばしば感情を自覚するようにしている",
					"b"=>"窮地に立たされても、何とかなると思う",
				),
			"5"=>array(
					"a"=>"将来、大きな仕事をしようと心に決めている",
					"b"=>"人の話をじっくり聞くことが得意である",
				),
			"6"=>array(
					"a"=>"やり直しを要求されても、その指摘が正しければ、進んでやり直す",
					"b"=>"雰囲気を壊さずに自分の意見を明快に主張できる",
				),
			"7"=>array(
					"a"=>"怒りや不快を顔にださず速やかに静められる",
					"b"=>"自分には人並み以上の知力がある",
				),
			"8"=>array(
					"a"=>"微妙な表情や会話の間から相手の気持ちの変化を感じる",
					"b"=>"怒りや不快を顔にださず速やかに静められる",
				),
			"9"=>array(
					"a"=>"仲間とはいっしょに楽しい時間を過ごす",
					"b"=>"微妙な表情や会話の間から相手の気持ちの変化を感じる",
				),
			"10"=>array(
					"a"=>"人の話をじっくり聞くことが得意である",
					"b"=>"「怒っているな」とか「不快だな」としばしば感情を自覚するようにしている",
				),
			);
	$array_exam[2] = array(
			"11"=>array(
					"a"=>"雰囲気を壊さずに自分の意見を明快に主張できる",
					"b"=>"将来、大きな仕事をしようと心に決めている",
				),
			"12"=>array(
					"a"=>"私の意見は仲間に反映されることが多い",
					"b"=>"自分が、なぜ、こんな気持ちになったのかを考えることが多い",
				),
			"13"=>array(
					"a"=>"自分の得意分野で勝負するように心がけている",
					"b"=>"顔をつぶさずに反対者を説き伏せる自信がある",
				),
			"14"=>array(
					"a"=>"あせり・恐怖・喜び・悲しみなど、いつも自分の今の感情に名前をつけられる",
					"b"=>"すこし話をすると相手の好みや性格が把握できる",
				),
			"15"=>array(
					"a"=>"自らのスキルを磨き、常に自分を向上させる",
					"b"=>"仲間を出し抜いて自分の手柄にしようとは思わない",
				),
			"16"=>array(
					"a"=>"自分は成功するだけの能力がある",
					"b"=>"自らのスキルを磨き、常に自分を向上させる",
				),
			"17"=>array(
					"a"=>"あせりや恐怖に打ち勝って冷静に行動できる",
					"b"=>"ハイキングや飲み会などの集まりを企画して仲間を喜ばせることが好き",
				),
			"18"=>array(
					"a"=>"すこし話をすると相手の好みや性格が把握できる",
					"b"=>"人を引っ張っていく力がある",
				),
			"19"=>array(
					"a"=>"失敗の恐れより、成功の喜びを期待して信じるほうだ",
					"b"=>"自分の得意分野で勝負するように心がけている",
				),
			"20"=>array(
					"a"=>"人から悩みを相談されることが多い",
					"b"=>"失敗の恐れより、成功の喜びを期待して信じるほうだ",
				),
			);
	$array_exam[3] = array(
			"21"=>array(
					"a"=>"顔をつぶさずに反対者を説き伏せる自信がある",
					"b"=>"人から悩みを相談されることが多い",
				),
			"22"=>array(
					"a"=>"ハイキングや飲み会などの集まりを企画して仲間を喜ばせることが好き",
					"b"=>"自分は成功するだけの能力がある",
				),
			"23"=>array(
					"a"=>"人を引っ張っていく力がある",
					"b"=>"あせりや恐怖に打ち勝って冷静に行動できる",
				),
			"24"=>array(
					"a"=>"仲間を出し抜いて自分の手柄にしようとは思わない",
					"b"=>"あせり・恐怖・喜び・悲しみなど、いつも自分の今の感情に名前をつけられる",
				),
			"25"=>array(
					"a"=>"自分は本当はどうしたいのだろう、どんな気持ちなのだろうと、いつも考える",
					"b"=>"集団の中ではリーダーシップを発揮する",
				),
			"26"=>array(
					"a"=>"私は自分が好きであり、肯定的に受け止めている",
					"b"=>"涙もろく、もらい泣きをするほうである",
				),
			"27"=>array(
					"a"=>"かっとなったり、我を忘れて怒ったりしない",
					"b"=>"チームワークを大切にしている",
				),
			"28"=>array(
					"a"=>"自分の弱点を知り、その点で強がらないようにしている",
					"b"=>"かっとなったり、我を忘れて怒ったりしない",
				),
			"29"=>array(
					"a"=>"臨機応変に優先順位を変えながら楽しく課題をかたづける",
					"b"=>"気難しい客のいる店の接客の仕事（アルバイト）も辛くない",
				),
			"30"=>array(
					"a"=>"涙もろく、もらい泣きをするほうである。",
					"b"=>"理解できない説明には、ためらわず率直に質問する",
				),
			);
	$array_exam[4] = array(

			"31"=>array(
					"a"=>"私が頑張れば、必ず、状況を好転させられる",
					"b"=>"自分は本当はどうしたいのだろう、どんな気持ちなのだろうと、いつも考える",
				),
			"32"=>array(
					"a"=>"気難しい客のいる店の接客の仕事（アルバイト）も辛くない",
					"b"=>"臨機応変に優先順位を変えながら楽しく課題をかたづける",
				),
			"33"=>array(
					"a"=>"集団の中ではリーダーシップを発揮する",
					"b"=>"本音と建前の違いを、私は素早く見抜いてしまう",
				),
			"34"=>array(
					"a"=>"本音と建前の違いを、私は素早く見抜いてしまう",
					"b"=>"私は自分が好きであり、肯定的に受け止めている",
				),
			"35"=>array(
					"a"=>"チームワークを大切にしている",
					"b"=>"私が頑張れば、必ず、状況を好転させられる",
				),
			"36"=>array(
					"a"=>"理解できない説明には、ためらわず率直に質問する",
					"b"=>"自分の弱点を知り、その点で強がらないようにしている",
				),
			);
	break;
}
//ページ設定
if($_REQUEST[ 'next' ]){
	$pager = $_REQUEST['nextPage'];
}else{
	$pager = 1;
}

//最大のページ数
$max = count($array_exam);
//where句の作成
$where = array();
if($ua){
//	$where[ 'id'        ] = $testlink[0][tpid];
	$where[ 'testgrp_id'] = $_REQUEST[tid];
	$where[ 'exam_id'   ] = $_REQUEST[ 'e' ];
	$where[ 'type'      ] = $first;

}else{
//	$where[ 'id'        ] = $_SESSION[ 'visit' ][ 'login_id' ];
	$where[ 'testgrp_id'] = $_SESSION[ 'visit' ][ 'test_id'  ];
	$where[ 'exam_id'   ] = $_SESSION[ 'visit' ][ 'exam_id'  ];
	$where[ 'type'      ] = $first;
}

//--------------------------------
//回答登録
//--------------------------------
if($_REQUEST[ 'q' ] && count($_REQUEST[ 'q' ])){
	foreach($_REQUEST[ 'q' ] as $key=>$val){
		$q = "q".$key;
		$edit[ $q ] = $val;
	}
	$tbl = "t_testpaper";
	$obj->editDetail($tbl,$edit,$where);
	
}


//スタート時間の登録
//初回ページ
if($_REQUEST[ 'page' ]){
	$flg = $t->checkExamState($where);
	if($flg[ 'exam_state' ] == 2){
		header("Location:".D_URL_TEST."?k=".$_REQUEST[ 'k' ]);
		exit();
	}
	$obj->setStartTime($where);
}else{
	//初回以外　テストページの時
	if($temp == "page"){
		$flg = $t->checkExamState($where);
		if($flg[ 'exam_state' ] == 2){
			header("Location:".D_URL_TEST."?k=".$_REQUEST[ 'k' ]);
			exit();
		}
	}
}


//次のページ
if($_REQUEST[ 'next' ]){
	//エラーチェック
	$err = 0;
	if($_REQUEST[ 'nextPage' ] == 2){
		for($i=1;$i<=10;$i++){
			if(!$_REQUEST[ 'q' ][$i]){
				$err = $i;
				break;
			}
		}
	}
	if($_REQUEST[ 'nextPage' ] == 3){
		for($i=11;$i<=20;$i++){
			if(!$_REQUEST[ 'q' ][$i]){
				$err = $i;
				break;
			}
		}
	}
	if($_REQUEST[ 'nextPage' ] == 4){
		for($i=21;$i<=30;$i++){
			if(!$_REQUEST[ 'q' ][$i]){
				$err = $i;
				break;
			}
		}
	}
	if($_REQUEST[ 'nextPage' ] == 5){
		for($i=31;$i<=36;$i++){
			if(!$_REQUEST[ 'q' ][$i]){
				$err = $i;
				break;
			}
		}
	}
	if($err){
		//エラーがあった時はコチラ
		switch($language){
			case "4":
				$errmsg = "Câu hỏi".$err." không được chọn";
			break;
			default:
				$errmsg = "設問".$err."が選択されていません。";
			break;
		}
		$pager  = $_REQUEST[ 'nextPage' ]-1;
	}else
	if($max < $_REQUEST[ 'nextPage' ]){
		//----------------------------
		//最終ページ
		//----------------------------
		include_once(D_PATH_HOME."/lib/keisan/functionBA12.php");
		include_once(D_PATH_HOME."/init/rowData/raw_data_ta3.php");
		include_once(D_PATH_HOME."/init/rowData/dev_data_ta3.php");

		//テストデータ取得
		$tdetail = $obj->getTestPaper($where);

		//重みデータ取得
		$wt = array();
		if($ua){
			$wt[ 'test_id' ] = $_REQUEST[tid];
			$wt[ 'type'    ] = $first;
		}else{
			$wt[ 'test_id' ] = $_SESSION[ 'visit' ][ 'test_id' ];
			$wt[ 'type'    ] = $first;
		}
		$weights = $obj->getWeight($wt);

		//---------------------
		//結果計算
		//---------------------
		list($row,$lv,$standard_score,$dev_number) = BA12($tdetail,$weights,$raw_data,$dev_data);
		$soyo = $dev_number;
		$imgDir = "tb";
		$s_day  = explode( '/', $tdetail['exam_date'] ); 
		$s_time = explode( ':', $tdetail['start_time'] ); 

		$start_timestamp = mktime($s_time[0], $s_time[1], $s_time[2], $s_day[1], $s_day[2], $s_day[0]);
		$end_timestamp   = time();

		$end_timer = $end_timestamp - $start_timestamp;
		$e_time[0] = (int)($end_timer / 60);
		$e_time[1] = $end_timer % 60;

		$set = array();
		$set[ 'exam_state' ] = 2;
		$set[ 'level'      ] = $lv;
		$set[ 'exam_time'  ] = $e_time[0].":".$e_time[1];
		$set[ 'score'      ] = $standard_score;
		for($i=1;$i<=12;$i++){
			$dev = "dev".$i;
			$set[$dev] = $row[ $dev ];
		}
		$set[ 'soyo'       ] = $dev_number;
		$set[ 'fin_exam_date' ] = sprintf("%04d-%02d-%02d %02d:%02d:%02d"
									,date("Y"),date("m"),date("d")
									,date("H"),date("i"),date("s")
									);

		$tbl = "t_testpaper";


		
		$obj->editDetail($tbl,$set,$where);
		//complete_flgの設定
		$t->editCompleteFlg($where);
		//メール配信
		$t->sendFinMail($where);
		

		$fin_disp = $test[ 'fin_disp' ];
		$temp = "Fin";
		
	}
}


if($_REQUEST[ 'back' ]){
	$pager = $_REQUEST[ 'backPage' ];
	//戻るボタンの時はチェックされた項目を編集
}

//テストデータ取得
$tdetail = $obj->getTestPaper($where);
//var_dump($pager);
//var_dump($tdetail);
//var_dump($_REQUEST);

if($_REQUEST[ 'next' ]){
//登録データのチェック
//不足データがある時は
//不足データのあるページに移動
	if($pager >= 5){
		for($i=31;$i<=36;$i++){
			$q = "q".$i;
			if(!$tdetail[ $q ]){
				$pager = 4;
				switch($language){
					case "4":
						$alert = "Trang ".$pager." là không chính xác.";
					break;
					default:
						$alert = $pager."ページに誤りがあります。";
					break;
				}
				$temp = "page";
			}
		}
	}
	if($pager >= 4){
		for($i=21;$i<=30;$i++){
			$q = "q".$i;
			if(!$tdetail[ $q ]){
				$pager = 3;
				switch($language){
					case "4":
						$alert = "Trang ".$pager." là không chính xác.";
					break;
					default:
						$alert = $pager."ページに誤りがあります。";
					break;
				}
				$temp = "page";
			}
		}
	}
	if($pager >= 3){
		for($i=11;$i<=20;$i++){
			$q = "q".$i;
			if(!$tdetail[ $q ]){
				$pager = 2;
				switch($language){
					case "4":
						$alert = "Trang ".$pager." là không chính xác.";
					break;
					default:
						$alert = $pager."ページに誤りがあります。";
					break;
				}
				$temp = "page";
			}
		}
	}
	if($pager >= 2){
		for($i=1;$i<=10;$i++){
			$q = "q".$i;
			if(!$tdetail[ $q ]){
				$pager = 1;
				switch($language){
					case "4":
						$alert = "Trang ".$pager." là không chính xác.";
					break;
					default:
						$alert = $pager."ページに誤りがあります。";
					break;
				}
				$temp = "page";
			}
		}
	}
}



$nextPage = $pager+1;
$backPage = $pager-1;
	
$exam = $array_exam[$pager];

//配列が41で来ているので12に変更
if($array_test_change[$first]){
	$first = $array_test_change[$first];
}
?>