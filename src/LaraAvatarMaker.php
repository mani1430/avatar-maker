<?php 

namespace Lara\LaraAvatarMaker;

class LaraAvatarMaker
{
 
    
    public static function makeAvatar($name)
    {
        $name = explode(' ',$name);
        if(count($name) <= 1)
        {
            $first_letter = $name[0][0];
            $second_letter = $name[0][1];
        }
        else
        {
            $first_letter = $name[0][0];
            $second_letter = $name[1][0];
        }
        $text = implode([$first_letter,$second_letter]);
        $avatar_name = strtoupper($text);
        $bg_color = LaraAvatarMaker::getColorCode(strtoupper($first_letter));
        $avatar = "
        <div style='position:relative;width: 60px;height: 60px;'>
        <span style='
        background-color: $bg_color;
        padding: 10px;
        text-align: center;
        border-radius: 50%;
        font-size: 13px;
        font-family: sans-serif;
        font-weight: 800;
        color: white;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        '>
        $avatar_name
        </span>
        </div>
        ";
        return $avatar;
    }
    public static function makeAvatarRing($name)
    {
        $name = explode(' ',$name);
        if(count($name) <= 1)
        {
            $first_letter = $name[0][0];
            $second_letter = $name[0][1];
        }
        else
        {
            $first_letter = $name[0][0];
            $second_letter = $name[1][0];
        }
        $text = implode([$first_letter,$second_letter]);
        $avatar_name = strtoupper($text);
        $bg_color = LaraAvatarMaker::getColorCode(strtoupper($first_letter));
        $ring_color = LaraAvatarMaker::getRingColorCode(strtoupper($first_letter));
        $avatar = "
        <div style='position:relative;width: 60px;height: 60px;'>
        <span style='
        background-color: $bg_color;
        padding: 10px;
        text-align: center;
        border-radius: 50%;
        font-size: 13px;
        font-family: sans-serif;
        font-weight: 800;
        color: white;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 1;
        '>
        $avatar_name
        </span>
        <span style='
        background-color: $ring_color;
        padding: 24px;
        text-align: center;
        border-radius: 50%;
        font-size: 13px;
        font-family: sans-serif;
        font-weight: 800;
        color: white;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        '>
        </span>
        </div>
        ";
        return $avatar;
    }
    public static function getColorCode($first_letter)
    {
         switch ($first_letter) {
            case 'A':
                $color = '#1ecbe1';
                break;
            case 'B':
                $color = '#eb1416';
                break;
            case 'C':
                $color = '#e55e1a';
                break;
            case 'D':
                $color = '#1a9be5';
                break;
            case 'E':
                $color = '#3a0303';
                break;
            case 'F':
                $color = '#117668';
                break;
            case 'G':
                $color = '#135b76';
                break;
            case 'H':
                $color = '#12c33f';
                break;
            case 'I':
                $color = '#46bf29';
                break;
            case 'J':
                $color = '#93c33c';
                break;
            case 'K':
                $color = '#b1ae4e';
                break;
            case 'L':
                $color = '#5b51ae';
                break;
            case 'M':
                $color = '#710a95';
                break;
            case 'N':
                $color = '#bc439c';
                break;
            case 'O':
                $color = '#bf2ed1';
                break;
            case 'P':
                $color = '#dc23c4';
                break;
            case 'Q':
                $color = '#3b01fe';
                break;
            case 'R':
                $color = '#1c65e3';
                break;
            case 'S':
                $color = '#2684d9';
                break;
            case 'T':
                $color = '#d12ea7';
                break;
            case 'U':
                $color = '#a51b47';
                break;
            case 'V':
                $color = '#f80767';
                break;
            case 'W':
                $color = '#5260c1';
                break;
            case 'X':
                $color = '#cf4c2d52';
                break;
            case 'Y':
                $color = '#4458bb';
                break;
            case 'Z':
                $color = '#b97446';
                break;
            
            default:
                $color = '#3095ae';
                break;
         }
         return $color;
    }
    public static function getRingColorCode($first_letter)
    {
         switch ($first_letter) {
            case 'A':
                $color = '#29e7ff';
                break;
            case 'B':
                $color = '#d99e9ecc';
                break;
            case 'C':
                $color = '#efbea5';
                break;
            case 'D':
                $color = '#a1bccbad';
                break;
            case 'E':
                $color = '#897a7a94';
                break;
            case 'F':
                $color = '#99bfb9';
                break;
            case 'G':
                $color = '#83b2b7';
                break;
            case 'H':
                $color = '#9ae5ad';
                break;
            case 'I':
                $color = '#b5d3ae';
                break;
            case 'J':
                $color = '#acdd539e';
                break;
            case 'K':
                $color = '#cdc95a';
                break;
            case 'L':
                $color = '#6658d759';
                break;
            case 'M':
                $color = '#ad6dc380';
                break;
            case 'N':
                $color = '#a17b9780';
                break;
            case 'O':
                $color = '#bf2ed152';
                break;
            case 'P':
                $color = '#dc23c442';
                break;
            case 'Q':
                $color = '#3b01fe38';
                break;
            case 'R':
                $color = '#1c65e342';
                break;
            case 'S':
                $color = '#2684d98c';
                break;
            case 'T':
                $color = '#d12ea763';
                break;
            case 'U':
                $color = '#9d268385';
                break;
            case 'V':
                $color = '#f8076738';
                break;
            case 'W':
                $color = '#48579d4d';
                break;
            case 'X':
                $color = '#dd4522';
                break;
            case 'Y':
                $color = '#4458bb5e';
                break;
            case 'Z':
                $color = '#b974465e';
                break;
            
            default:
                $color = '#3095ae';
                break;
         }
         return $color;
    }
}