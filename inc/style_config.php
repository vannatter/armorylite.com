<?
  include_once("armorylite.class.php");
  $al = new armorylite();
  
  switch ($_GET["s"]) {
    case "p":
      $color_00   = "#000000";
      $color_01   = "#00997D";
      $color_02   = "#222222";
      $color_03   = "#666666";
      $color_04   = "#111111";  ## body background color
      $color_05   = "#999999";  ## body text color
      $color_06   = "#444444";
      $color_07   = "#333333";
      $color_08   = "#FF8000";
      $color_09   = "#A335EE";
      $color_10   = "#0070DD";
      $color_11   = "#FFD100";
      $color_12   = "#000000";
      $color_13   = "#111111";
      $color_14   = "#FFD100";
      $color_15   = "#666666";
      $color_16   = "#000000";
      $color_17   = "#999999";
      $color_18   = "#FFFFFF";
      $color_19   = "#222222";
      $color_20   = "#555555";
      $color_21   = "#666666";
      $color_22   = "#AAAAAA";
      $color_23   = "#121212";    ## stats_head_on
      $color_24   = "#FFD100";    ## stats_head_on
      $color_25   = "#FFD100";    ## stats_head_on
      $color_26   = "#212121";    ## stats_head_off
      $color_27   = "#555555";    ## stats_head_off
      $color_28   = "#666666";    ## stats_head_off
      $color_29   = "#000000";    ## stats_main
      $color_30   = "#333333";    ## stats_main
      $color_31   = "#FFD100";    ## stats_main
      $color_32   = "#999999";    ## stats_lbl
      $color_33   = "#AAAAAA";    ## stats_val
      $color_34   = "#CCCCCC";    ## stats_val2
      $color_35   = "#FFFFFF";    ## sub6
      $color_36   = "#666666";    ## sub6
      $color_37   = "#222222";    ## sub6
      $color_38   = "#FFFFFF";    ## hp
      $color_39   = "#247B01";    ## hp
      $color_40   = "#222222";    ## hp
      $color_41   = "#FFFFFF";    ## mana
      $color_42   = "#205497";    ## mana
      $color_43   = "#222222";    ## mana
      $color_44   = "#FFFFFF";    ## rage
      $color_45   = "#C10000";    ## rage
      $color_46   = "#222222";    ## rage
      $color_47   = "#FFFFFF";    ## energy
      $color_48   = "#C6C600";    ## energy
      $color_49   = "#222222";    ## energy
      $color_50   = "#666666";    ## prof
      $color_51   = "#666666";    ## prof
      $color_52   = "#111111";    ## prof
      $color_53   = "#666666";    ## alink
      $color_54   = "#212121";    ## alink
      $color_55   = "#666666";    ## alink->a:hover
      $color_56   = "#222222";    ## alink->a:hover
      $color_57   = "#666666";    ## tlink
      $color_58   = "#212121";    ## tlink
      $color_59   = "#666666";    ## tlink->a:hover
      $color_60   = "#222222";    ## tlink->a:hover
      $color_61   = "#555555";    ## talents->content->pane
      $color_62   = "#222222";    ## talents->content->pane
      $color_63   = "#222222";    ## talents->content->col
      $color_64   = "#222222";    ## talents->content->col
      $color_65   = "#555555";    ## talents->content->empty
      $color_66   = "#111111";    ## talents->content->empty
      $color_67   = "#A63A3A";    ## talents->content->full
      $color_68   = "#000000";    ## talents->content->full
      $color_69   = "#22BA00";    ## talents->content->half
      $color_70   = "#000000";    ## talents->content->half
      $color_72   = "#EEEEEE";    ## talents->content->rank_on->A
      $color_73   = "#999999";    ## talents->content->rank_on->A:hover
      $color_74   = "#222222";    ## talents->content->rank_on->A:hover
      $color_75   = "#777777";    ## talents->content->rank_off->A
      $color_76   = "#999999";    ## talents->content->rank_off->A:hover
      $color_77   = "#222222";    ## talents->content->rank_off->A:hover
      $color_78   = "#666666";    ## rep_header
      $color_79   = "#222222";    ## rep_header
      $color_80   = "#444444";    ## rep_header
      $color_81   = "#444444";    ## rep_header_off
      $color_82   = "#222222";    ## rep_header_off
      $color_83   = "#444444";    ## rep_header_off
      $color_84   = "#444444";    ## rep_box
      $color_85   = "#222222";    ## rep_box
      $color_86   = "#AAAAAA";    ## guild_member_name->A, arenateam_member->A
      $color_87   = "#D59B31";    ## me, me_name
      $color_88   = "#000000";    ## arenateam_member_header
      $color_89   = "#444444";    ## select
      $color_90   = "#666666";    ## select
      $color_91   = "#999999";    ## select
      $color_92   = "#666666";    ## login_on
      $color_93   = "#AAAAAA";    ## login_on
      $color_94   = "#FFFFFF";    ## login_on
      $color_95   = "#FFD100";    ## headernav->box_on
      $color_96   = "#111111";    ## headernav->box_on
      $color_97   = "#000000";    ## headernav->box_on
      $color_98   = "#666666";    ## headernav->box_off
      $color_99   = "#111111";    ## headernav->box_off
      $color_100  = "#111111";    ## headernav->box_off
      $color_101  = "#222222";    ## push
      $color_102  = "#D59B31";    ## me_on
      $color_103  = "#FFFFCC";    ## heirloom item
      $color_104  = "#111111";    ## nav->box_off->top border
      $color_105  = "#111111";    ## nav->box_on->top border
      $color_106  = "#666666";    ## nav->my_on->bg
      $color_107  = "#222222";    ## nav->my_on->text

      $mesh_01  = "/images/mesh_powered.gif";
      break;
    
    case "d":
      $color_00   = "#000000";
      $color_01   = "#99FF99";
      $color_02   = "#222222";
      $color_03   = "#666666";
      $color_04   = "#111111";  ## body background color
      $color_05   = "#999999";  ## body text color
      $color_06   = "#444444";
      $color_07   = "#333333";
      $color_08   = "#FF8000";
      $color_09   = "#A335EE";
      $color_10   = "#0070DD";
      $color_11   = "#99FF99"; ## was "#FFD100";
      $color_12   = "#000000";
      $color_13   = "#111111";
      $color_14   = "#99FF99";
      $color_15   = "#666666";
      $color_16   = "#000000";
      $color_17   = "#999999";
      $color_18   = "#FFFFFF";
      $color_19   = "#222222";
      $color_20   = "#555555";
      $color_21   = "#666666";
      $color_22   = "#AAAAAA";
      $color_23   = "#121212";    ## stats_head_on
      $color_24   = "#99FF99";    ## stats_head_on
      $color_25   = "#99FF99";    ## stats_head_on
      $color_26   = "#212121";    ## stats_head_off
      $color_27   = "#555555";    ## stats_head_off
      $color_28   = "#666666";    ## stats_head_off
      $color_29   = "#000000";    ## stats_main
      $color_30   = "#333333";    ## stats_main
      $color_31   = "#99FF99";    ## stats_main
      $color_32   = "#999999";    ## stats_lbl
      $color_33   = "#AAAAAA";    ## stats_val
      $color_34   = "#CCCCCC";    ## stats_val2
      $color_35   = "#FFFFFF";    ## sub6
      $color_36   = "#666666";    ## sub6
      $color_37   = "#222222";    ## sub6
      $color_38   = "#FFFFFF";    ## hp
      $color_39   = "#247B01";    ## hp
      $color_40   = "#222222";    ## hp
      $color_41   = "#FFFFFF";    ## mana
      $color_42   = "#205497";    ## mana
      $color_43   = "#222222";    ## mana
      $color_44   = "#FFFFFF";    ## rage
      $color_45   = "#C10000";    ## rage
      $color_46   = "#222222";    ## rage
      $color_47   = "#FFFFFF";    ## energy
      $color_48   = "#C6C600";    ## energy
      $color_49   = "#222222";    ## energy
      $color_50   = "#666666";    ## prof
      $color_51   = "#666666";    ## prof
      $color_52   = "#111111";    ## prof
      $color_53   = "#666666";    ## alink
      $color_54   = "#212121";    ## alink
      $color_55   = "#666666";    ## alink->a:hover
      $color_56   = "#222222";    ## alink->a:hover
      $color_57   = "#666666";    ## tlink
      $color_58   = "#212121";    ## tlink
      $color_59   = "#666666";    ## tlink->a:hover
      $color_60   = "#222222";    ## tlink->a:hover
      $color_61   = "#555555";    ## talents->content->pane
      $color_62   = "#222222";    ## talents->content->pane
      $color_63   = "#222222";    ## talents->content->col
      $color_64   = "#222222";    ## talents->content->col
      $color_65   = "#555555";    ## talents->content->empty
      $color_66   = "#111111";    ## talents->content->empty
      $color_67   = "#A63A3A";    ## talents->content->full
      $color_68   = "#000000";    ## talents->content->full
      $color_69   = "#22BA00";    ## talents->content->half
      $color_70   = "#000000";    ## talents->content->half
      $color_72   = "#EEEEEE";    ## talents->content->rank_on->A
      $color_73   = "#999999";    ## talents->content->rank_on->A:hover
      $color_74   = "#222222";    ## talents->content->rank_on->A:hover
      $color_75   = "#777777";    ## talents->content->rank_off->A
      $color_76   = "#999999";    ## talents->content->rank_off->A:hover
      $color_77   = "#222222";    ## talents->content->rank_off->A:hover
      $color_78   = "#666666";    ## rep_header
      $color_79   = "#222222";    ## rep_header
      $color_80   = "#444444";    ## rep_header
      $color_81   = "#444444";    ## rep_header_off
      $color_82   = "#222222";    ## rep_header_off
      $color_83   = "#444444";    ## rep_header_off
      $color_84   = "#444444";    ## rep_box
      $color_85   = "#222222";    ## rep_box
      $color_86   = "#AAAAAA";    ## guild_member_name->A, arenateam_member->A
      $color_87   = "#99FF99";    ## me, me_name
      $color_88   = "#000000";    ## arenateam_member_header
      $color_89   = "#444444";    ## select
      $color_90   = "#666666";    ## select
      $color_91   = "#999999";    ## select
      $color_92   = "#666666";    ## login_on
      $color_93   = "#AAAAAA";    ## login_on
      $color_94   = "#FFFFFF";    ## login_on
      $color_95   = "#99FF99";    ## headernav->box_on
      $color_96   = "#111111";    ## headernav->box_on
      $color_97   = "#000000";    ## headernav->box_on
      $color_98   = "#666666";    ## headernav->box_off
      $color_99   = "#111111";    ## headernav->box_off
      $color_100  = "#111111";    ## headernav->box_off
      $color_101  = "#222222";    ## push
      $color_102  = "#99FF99";    ## me_on
      $color_103  = "#FFFFCC";    ## heirloom item
      $color_104  = "#111111";    ## nav->box_off->top border
      $color_105  = "#111111";    ## nav->box_on->top border
      $color_106  = "#666666";    ## nav->my_on->bg
      $color_107  = "#222222";    ## nav->my_on->text

      $mesh_01  = "/images/mesh.gif";
      break;
    
    case "l":
      $color_00   = "#FFFFFF";
      $color_01   = "#7D7DFF";
      $color_02   = "#BBBBBB";
      $color_03   = "#666666";
      $color_04   = "#FFFFFF";  ## body background color
      $color_05   = "#777777";  ## body text color
      $color_06   = "#444444";
      $color_07   = "#666666";
      $color_08   = "#FF8000";
      $color_09   = "#A335EE";
      $color_10   = "#0070DD";
      $color_11   = "#AAAAAA";
      $color_12   = "#F3F3F3";
      $color_13   = "#FFFFFF";
      $color_14   = "#55AAFF";
      $color_15   = "#AAAAAA";
      $color_16   = "#FFFFFF";
      $color_17   = "#444444";
      $color_18   = "#000000";
      $color_19   = "#FBFBFB";
      $color_20   = "#AAAAAA";
      $color_21   = "#999999";
      $color_22   = "#888888";
      $color_23   = "#F1FA85";    ## stats_head_on
      $color_24   = "#000000";    ## stats_head_on
      $color_25   = "#666666";    ## stats_head_on
      $color_26   = "#EEEEEE";    ## stats_head_off
      $color_27   = "#444444";    ## stats_head_off
      $color_28   = "#666666";    ## stats_head_off
      $color_29   = "#000000";    ## stats_main
      $color_30   = "#FFFFFF";    ## stats_main
      $color_31   = "#666666";    ## stats_main
      $color_32   = "#222222";    ## stats_lbl
      $color_33   = "#666666";    ## stats_val
      $color_34   = "#AAAAAA";    ## stats_val2
      $color_35   = "#777777";    ## sub6
      $color_36   = "#666666";    ## sub6
      $color_37   = "#EEEEEE";    ## sub6
      $color_38   = "#FFFFFF";    ## hp
      $color_39   = "#175401";    ## hp
      $color_40   = "#247B01";    ## hp
      $color_41   = "#FFFFFF";    ## mana
      $color_42   = "#153664";    ## mana
      $color_43   = "#205497";    ## mana
      $color_44   = "#FFFFFF";    ## rage
      $color_45   = "#7D0000";    ## rage
      $color_46   = "#C10000";    ## rage
      $color_47   = "#FFFFFF";    ## energy
      $color_48   = "#6F6F00";    ## energy
      $color_49   = "#C6C600";    ## energy
      $color_50   = "#247B01";    ## prof
      $color_51   = "#4BA800";    ## prof
      $color_52   = "#C7FF99";    ## prof
      $color_53   = "#666666";    ## alink
      $color_54   = "#EEEEEE";    ## alink
      $color_55   = "#999999";    ## alink->a:hover
      $color_56   = "#222222";    ## alink->a:hover
      $color_57   = "#666666";    ## tlink
      $color_58   = "#EEEEEE";    ## tlink
      $color_59   = "#666666";    ## tlink->a:hover
      $color_60   = "#222222";    ## tlink->a:hover
      $color_61   = "#AAAAAA";    ## talents->content->pane
      $color_62   = "#DDDDDD";    ## talents->content->pane
      $color_63   = "#DDDDDD";    ## talents->content->col
      $color_64   = "#DDDDDD";    ## talents->content->col
      $color_65   = "#777777";    ## talents->content->empty
      $color_66   = "#EFEFEF";    ## talents->content->empty
      $color_67   = "#A63A3A";    ## talents->content->full
      $color_68   = "#FFFFFF";    ## talents->content->full
      $color_69   = "#22BA00";    ## talents->content->half
      $color_70   = "#FFFFFF";    ## talents->content->half
      $color_72   = "#777777";    ## talents->content->rank_on->A
      $color_73   = "#999999";    ## talents->content->rank_on->A:hover
      $color_74   = "#222222";    ## talents->content->rank_on->A:hover
      $color_75   = "#888888";    ## talents->content->rank_off->A
      $color_76   = "#999999";    ## talents->content->rank_off->A:hover
      $color_77   = "#222222";    ## talents->content->rank_off->A:hover
      $color_78   = "#666666";    ## rep_header
      $color_79   = "#EEEEEE";    ## rep_header
      $color_80   = "#BBBBBB";    ## rep_header
      $color_81   = "#999999";    ## rep_header_off
      $color_82   = "#EEEEEE";    ## rep_header_off
      $color_83   = "#BBBBBB";    ## rep_header_off
      $color_84   = "#AAAAAA";    ## rep_box
      $color_85   = "#FFFFFF";    ## rep_box
      $color_86   = "#666666";    ## guild_member_name->A, arenateam_member->A
      $color_87   = "#55AAFF";    ## me, me_name
      $color_88   = "#EFEFEF";    ## arenateam_member_header
      $color_89   = "#FFFFFF";    ## select
      $color_90   = "#AAAAAA";    ## select
      $color_91   = "#999999";    ## select
      $color_92   = "#7D7DFF";    ## login_on
      $color_93   = "#FFFFFF";    ## login_on
      $color_94   = "#FFFFFF";    ## login_on
      $color_95   = "#55AAFF";    ## headernav->box_on
      $color_96   = "#111111";    ## headernav->box_on
      $color_97   = "#F3F3F3";    ## headernav->box_on
      $color_98   = "#666666";    ## headernav->box_off
      $color_99   = "#111111";    ## headernav->box_off
      $color_100  = "#FFFFFF";    ## headernav->box_off
      $color_101  = "#EEEEEE";    ## push
      $color_102  = "#0079F2";    ## me_on
      $color_103  = "#FFFFCC";    ## heirloom item
      $color_104  = "#FFFFFF";    ## nav->box_off->top border
      $color_105  = "#FFFFFF";    ## nav->box_on->top border
      $color_106  = "#aaaaaa";    ## nav->my_on->bg
      $color_107  = "#eeeeee";    ## nav->my_on->text
      
      $mesh_01  = "/images/meshlight.gif";
      break;

    case "a":
      $color_00   = (($al->aff_content["color_00"]) ? $al->aff_content["color_00"] : "#000000");
      $color_01   = (($al->aff_content["color_01"]) ? $al->aff_content["color_01"] : "#00997D");
      $color_02   = (($al->aff_content["color_02"]) ? $al->aff_content["color_02"] : "#222222");
      $color_03   = (($al->aff_content["color_03"]) ? $al->aff_content["color_03"] : "#666666");
      $color_04   = (($al->aff_content["color_04"]) ? $al->aff_content["color_04"] : "#000000");  ## body background color
      $color_05   = (($al->aff_content["color_05"]) ? $al->aff_content["color_05"] : "#999999");  ## body text color
      $color_06   = (($al->aff_content["color_06"]) ? $al->aff_content["color_06"] : "#444444");
      $color_07   = (($al->aff_content["color_07"]) ? $al->aff_content["color_07"] : "#333333");
      $color_08   = (($al->aff_content["color_08"]) ? $al->aff_content["color_08"] : "#FF8000");
      $color_09   = (($al->aff_content["color_09"]) ? $al->aff_content["color_09"] : "#A335EE");
      $color_10   = (($al->aff_content["color_10"]) ? $al->aff_content["color_10"] : "#0070DD");
      $color_11   = (($al->aff_content["color_11"]) ? $al->aff_content["color_11"] : "#0284B3");    ## nav-box_on->border
      $color_12   = (($al->aff_content["color_12"]) ? $al->aff_content["color_12"] : "#000000");
      $color_13   = (($al->aff_content["color_13"]) ? $al->aff_content["color_13"] : "#111111");
      $color_14   = (($al->aff_content["color_14"]) ? $al->aff_content["color_14"] : "#0284B3");    ## nav->box_on->text color
      $color_15   = (($al->aff_content["color_15"]) ? $al->aff_content["color_15"] : "#666666");    ## nav->box_off->border
      $color_16   = (($al->aff_content["color_16"]) ? $al->aff_content["color_16"] : "#000000");
      $color_17   = (($al->aff_content["color_17"]) ? $al->aff_content["color_17"] : "#999999");
      $color_18   = (($al->aff_content["color_18"]) ? $al->aff_content["color_18"] : "#FFFFFF");
      $color_19   = (($al->aff_content["color_19"]) ? $al->aff_content["color_19"] : "#222222");
      $color_20   = (($al->aff_content["color_20"]) ? $al->aff_content["color_20"] : "#555555");
      $color_21   = (($al->aff_content["color_21"]) ? $al->aff_content["color_21"] : "#666666");
      $color_22   = (($al->aff_content["color_22"]) ? $al->aff_content["color_22"] : "#AAAAAA");
      $color_23   = (($al->aff_content["color_23"]) ? $al->aff_content["color_23"] : "#121212");    ## stats_head_on
      $color_24   = (($al->aff_content["color_24"]) ? $al->aff_content["color_24"] : "#0284B3");    ## stats_head_on->text
      $color_25   = (($al->aff_content["color_25"]) ? $al->aff_content["color_25"] : "#0284B3");    ## stats_head_on->border
      $color_26   = (($al->aff_content["color_26"]) ? $al->aff_content["color_26"] : "#212121");    ## stats_head_off
      $color_27   = (($al->aff_content["color_27"]) ? $al->aff_content["color_27"] : "#555555");    ## stats_head_off
      $color_28   = (($al->aff_content["color_28"]) ? $al->aff_content["color_28"] : "#666666");    ## stats_head_off
      $color_29   = (($al->aff_content["color_29"]) ? $al->aff_content["color_29"] : "#000000");    ## stats_main
      $color_30   = (($al->aff_content["color_30"]) ? $al->aff_content["color_30"] : "#333333");    ## stats_main
      $color_31   = (($al->aff_content["color_31"]) ? $al->aff_content["color_31"] : "#0284B3");    ## stats_main->border
      $color_32   = (($al->aff_content["color_32"]) ? $al->aff_content["color_32"] : "#999999");    ## stats_lbl
      $color_33   = (($al->aff_content["color_33"]) ? $al->aff_content["color_33"] : "#AAAAAA");    ## stats_val
      $color_34   = (($al->aff_content["color_34"]) ? $al->aff_content["color_34"] : "#CCCCCC");    ## stats_val2
      $color_35   = (($al->aff_content["color_35"]) ? $al->aff_content["color_35"] : "#FFFFFF");    ## sub6
      $color_36   = (($al->aff_content["color_36"]) ? $al->aff_content["color_36"] : "#666666");    ## sub6
      $color_37   = (($al->aff_content["color_37"]) ? $al->aff_content["color_37"] : "#222222");    ## sub6
      $color_38   = (($al->aff_content["color_38"]) ? $al->aff_content["color_38"] : "#FFFFFF");    ## hp
      $color_39   = (($al->aff_content["color_39"]) ? $al->aff_content["color_39"] : "#247B01");    ## hp
      $color_40   = (($al->aff_content["color_40"]) ? $al->aff_content["color_40"] : "#222222");    ## hp
      $color_41   = (($al->aff_content["color_41"]) ? $al->aff_content["color_41"] : "#FFFFFF");    ## mana
      $color_42   = (($al->aff_content["color_42"]) ? $al->aff_content["color_42"] : "#205497");    ## mana
      $color_43   = (($al->aff_content["color_43"]) ? $al->aff_content["color_43"] : "#222222");    ## mana
      $color_44   = (($al->aff_content["color_44"]) ? $al->aff_content["color_44"] : "#FFFFFF");    ## rage
      $color_45   = (($al->aff_content["color_45"]) ? $al->aff_content["color_45"] : "#C10000");    ## rage
      $color_46   = (($al->aff_content["color_46"]) ? $al->aff_content["color_46"] : "#222222");    ## rage
      $color_47   = (($al->aff_content["color_47"]) ? $al->aff_content["color_47"] : "#FFFFFF");    ## energy
      $color_48   = (($al->aff_content["color_48"]) ? $al->aff_content["color_48"] : "#C6C600");    ## energy
      $color_49   = (($al->aff_content["color_49"]) ? $al->aff_content["color_49"] : "#222222");    ## energy
      $color_50   = (($al->aff_content["color_50"]) ? $al->aff_content["color_50"] : "#666666");    ## prof
      $color_51   = (($al->aff_content["color_51"]) ? $al->aff_content["color_51"] : "#666666");    ## prof
      $color_52   = (($al->aff_content["color_52"]) ? $al->aff_content["color_52"] : "#111111");    ## prof
      $color_53   = (($al->aff_content["color_53"]) ? $al->aff_content["color_53"] : "#666666");    ## alink
      $color_54   = (($al->aff_content["color_54"]) ? $al->aff_content["color_54"] : "#212121");    ## alink
      $color_55   = (($al->aff_content["color_55"]) ? $al->aff_content["color_55"] : "#666666");    ## alink->a:hover
      $color_56   = (($al->aff_content["color_56"]) ? $al->aff_content["color_56"] : "#222222");    ## alink->a:hover
      $color_57   = (($al->aff_content["color_57"]) ? $al->aff_content["color_57"] : "#666666");    ## tlink
      $color_58   = (($al->aff_content["color_58"]) ? $al->aff_content["color_58"] : "#212121");    ## tlink
      $color_59   = (($al->aff_content["color_59"]) ? $al->aff_content["color_59"] : "#666666");    ## tlink->a:hover
      $color_60   = (($al->aff_content["color_60"]) ? $al->aff_content["color_60"] : "#222222");    ## tlink->a:hover
      $color_61   = (($al->aff_content["color_61"]) ? $al->aff_content["color_61"] : "#555555");    ## talents->content->pane
      $color_62   = (($al->aff_content["color_62"]) ? $al->aff_content["color_62"] : "#222222");    ## talents->content->pane
      $color_63   = (($al->aff_content["color_63"]) ? $al->aff_content["color_63"] : "#222222");    ## talents->content->col
      $color_64   = (($al->aff_content["color_64"]) ? $al->aff_content["color_64"] : "#222222");    ## talents->content->col
      $color_65   = (($al->aff_content["color_65"]) ? $al->aff_content["color_65"] : "#555555");    ## talents->content->empty
      $color_66   = (($al->aff_content["color_66"]) ? $al->aff_content["color_66"] : "#111111");    ## talents->content->empty
      $color_67   = (($al->aff_content["color_67"]) ? $al->aff_content["color_67"] : "#A63A3A");    ## talents->content->full
      $color_68   = (($al->aff_content["color_68"]) ? $al->aff_content["color_68"] : "#000000");    ## talents->content->full
      $color_69   = (($al->aff_content["color_69"]) ? $al->aff_content["color_69"] : "#22BA00");    ## talents->content->half
      $color_70   = (($al->aff_content["color_70"]) ? $al->aff_content["color_70"] : "#000000");    ## talents->content->half
      $color_72   = (($al->aff_content["color_72"]) ? $al->aff_content["color_72"] : "#EEEEEE");    ## talents->content->rank_on->A
      $color_73   = (($al->aff_content["color_73"]) ? $al->aff_content["color_73"] : "#999999");    ## talents->content->rank_on->A:hover
      $color_74   = (($al->aff_content["color_74"]) ? $al->aff_content["color_74"] : "#222222");    ## talents->content->rank_on->A:hover
      $color_75   = (($al->aff_content["color_75"]) ? $al->aff_content["color_75"] : "#777777");    ## talents->content->rank_off->A
      $color_76   = (($al->aff_content["color_76"]) ? $al->aff_content["color_76"] : "#999999");    ## talents->content->rank_off->A:hover
      $color_77   = (($al->aff_content["color_77"]) ? $al->aff_content["color_77"] : "#222222");    ## talents->content->rank_off->A:hover
      $color_78   = (($al->aff_content["color_78"]) ? $al->aff_content["color_78"] : "#666666");    ## rep_header
      $color_79   = (($al->aff_content["color_79"]) ? $al->aff_content["color_79"] : "#222222");    ## rep_header
      $color_80   = (($al->aff_content["color_80"]) ? $al->aff_content["color_80"] : "#444444");    ## rep_header
      $color_81   = (($al->aff_content["color_81"]) ? $al->aff_content["color_81"] : "#444444");    ## rep_header_off
      $color_82   = (($al->aff_content["color_82"]) ? $al->aff_content["color_82"] : "#222222");    ## rep_header_off
      $color_83   = (($al->aff_content["color_83"]) ? $al->aff_content["color_83"] : "#444444");    ## rep_header_off
      $color_84   = (($al->aff_content["color_84"]) ? $al->aff_content["color_84"] : "#444444");    ## rep_box
      $color_85   = (($al->aff_content["color_85"]) ? $al->aff_content["color_85"] : "#222222");    ## rep_box
      $color_86   = (($al->aff_content["color_86"]) ? $al->aff_content["color_86"] : "#AAAAAA");    ## guild_member_name->A, arenateam_member->A
      $color_87   = (($al->aff_content["color_87"]) ? $al->aff_content["color_87"] : "#D59B31");    ## me, me_name
      $color_88   = (($al->aff_content["color_88"]) ? $al->aff_content["color_88"] : "#000000");    ## arenateam_member_header
      $color_89   = (($al->aff_content["color_89"]) ? $al->aff_content["color_89"] : "#444444");    ## select
      $color_90   = (($al->aff_content["color_90"]) ? $al->aff_content["color_90"] : "#666666");    ## select
      $color_91   = (($al->aff_content["color_91"]) ? $al->aff_content["color_91"] : "#999999");    ## select
      $color_92   = (($al->aff_content["color_92"]) ? $al->aff_content["color_92"] : "#666666");    ## login_on
      $color_93   = (($al->aff_content["color_93"]) ? $al->aff_content["color_93"] : "#AAAAAA");    ## login_on
      $color_94   = (($al->aff_content["color_94"]) ? $al->aff_content["color_94"] : "#FFFFFF");    ## login_on
      $color_95   = (($al->aff_content["color_95"]) ? $al->aff_content["color_95"] : "#FFD100");    ## headernav->box_on
      $color_96   = (($al->aff_content["color_96"]) ? $al->aff_content["color_96"] : "#111111");    ## headernav->box_on
      $color_97   = (($al->aff_content["color_97"]) ? $al->aff_content["color_97"] : "#000000");    ## headernav->box_on
      $color_98   = (($al->aff_content["color_98"]) ? $al->aff_content["color_98"] : "#666666");    ## headernav->box_off
      $color_99   = (($al->aff_content["color_99"]) ? $al->aff_content["color_99"] : "#111111");    ## headernav->box_off
      $color_100  = (($al->aff_content["color_100"]) ? $al->aff_content["color_100"] : "#111111");  ## headernav->box_off
      $color_101  = (($al->aff_content["color_101"]) ? $al->aff_content["color_101"] : "#222222");  ## push
      $color_102  = (($al->aff_content["color_102"]) ? $al->aff_content["color_102"] : "#D59B31");  ## me_on
      $color_103  = (($al->aff_content["color_103"]) ? $al->aff_content["color_103"] : "#FFFFCC");  ## heirloom item
      $color_104  = (($al->aff_content["color_104"]) ? $al->aff_content["color_104"] : "#666666");  ## nav->box_off->top border
      $color_105  = (($al->aff_content["color_105"]) ? $al->aff_content["color_105"] : "#0284B3");  ## nav->box_on->top border
      $color_106  = (($al->aff_content["color_106"]) ? $al->aff_content["color_106"] : "#0284B3");  ## nav->my_on->bg
      $color_107  = (($al->aff_content["color_107"]) ? $al->aff_content["color_107"] : "#000000");  ## nav->my_on->text
      
      $mesh_01  = "/images/mesh.gif";
      break;      
      
  }
?>
