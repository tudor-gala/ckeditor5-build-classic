<?php

namespace App\Services;

class Emoji
{
    const MAPPING = [
       'categories' => [
          ['label' => 'Smileys & Emotion', 'emoji' => []],
          ['label' => 'People & Body', 'emoji' => []],
          ['label' => 'Animals & Nature', 'emoji' => []],
          ['label' => 'Food & Drink', 'emoji' => []],
          ['label' => 'Travel & Places', 'emoji' => []],
          ['label' => 'Activities', 'emoji' => []],
          ['label' => 'Objects', 'emoji' => []],
          ['label' => 'Symbols', 'emoji' => []],
          ['label' => 'Flags', 'emoji' => []],
        ],
        'emoji' => [[
            'emoji' => '😀',
            'category' => 0,
            'name' => 'grinning face',
            'version' => '1.0'
        ], [
            'emoji' => '😃',
            'category' => 0,
            'name' => 'grinning face with big eyes',
            'version' => '1.0'
        ], [
            'emoji' => '😄',
            'category' => 0,
            'name' => 'grinning face with smiling eyes',
            'version' => '1.0'
        ], [
            'emoji' => '😁',
            'category' => 0,
            'name' => 'beaming face with smiling eyes',
            'version' => '1.0'
        ], [
            'emoji' => '😆',
            'category' => 0,
            'name' => 'grinning squinting face',
            'version' => '1.0'
        ], [
            'emoji' => '😅',
            'category' => 0,
            'name' => 'grinning face with sweat',
            'version' => '1.0'
        ], [
            'emoji' => '🤣',
            'category' => 0,
            'name' => 'rolling on the floor laughing',
            'version' => '3.0'
        ], [
            'emoji' => '😂',
            'category' => 0,
            'name' => 'face with tears of joy',
            'version' => '1.0'
        ], [
            'emoji' => '🙂',
            'category' => 0,
            'name' => 'slightly smiling face',
            'version' => '1.0'
        ], [
            'emoji' => '🙃',
            'category' => 0,
            'name' => 'upside-down face',
            'version' => '1.0'
        ], [
            'emoji' => '😉',
            'category' => 0,
            'name' => 'winking face',
            'version' => '1.0'
        ], [
            'emoji' => '😊',
            'category' => 0,
            'name' => 'smiling face with smiling eyes',
            'version' => '1.0'
        ], [
            'emoji' => '😇',
            'category' => 0,
            'name' => 'smiling face with halo',
            'version' => '1.0'
        ], [
            'emoji' => '🥰',
            'category' => 0,
            'name' => 'smiling face with hearts',
            'version' => '11.0'
        ], [
            'emoji' => '😍',
            'category' => 0,
            'name' => 'smiling face with heart-eyes',
            'version' => '1.0'
        ], [
            'emoji' => '🤩',
            'category' => 0,
            'name' => 'star-struck',
            'version' => '5.0'
        ], [
            'emoji' => '😘',
            'category' => 0,
            'name' => 'face blowing a kiss',
            'version' => '1.0'
        ], [
            'emoji' => '😗',
            'category' => 0,
            'name' => 'kissing face',
            'version' => '1.0'
        ], [
            'emoji' => '☺️',
            'category' => 0,
            'name' => 'smiling face',
            'version' => '1.0'
        ], [
            'emoji' => '😚',
            'category' => 0,
            'name' => 'kissing face with closed eyes',
            'version' => '1.0'
        ], [
            'emoji' => '😙',
            'category' => 0,
            'name' => 'kissing face with smiling eyes',
            'version' => '1.0'
        ], [
            'emoji' => '🥲',
            'category' => 0,
            'name' => 'smiling face with tear',
            'version' => '13.0'
        ], [
            'emoji' => '😋',
            'category' => 0,
            'name' => 'face savoring food',
            'version' => '1.0'
        ], [
            'emoji' => '😛',
            'category' => 0,
            'name' => 'face with tongue',
            'version' => '1.0'
        ], [
            'emoji' => '😜',
            'category' => 0,
            'name' => 'winking face with tongue',
            'version' => '1.0'
        ], [
            'emoji' => '🤪',
            'category' => 0,
            'name' => 'zany face',
            'version' => '5.0'
        ], [
            'emoji' => '😝',
            'category' => 0,
            'name' => 'squinting face with tongue',
            'version' => '1.0'
        ], [
            'emoji' => '🤑',
            'category' => 0,
            'name' => 'money-mouth face',
            'version' => '1.0'
        ], [
            'emoji' => '🤗',
            'category' => 0,
            'name' => 'hugging face',
            'version' => '1.0'
        ], [
            'emoji' => '🤭',
            'category' => 0,
            'name' => 'face with hand over mouth',
            'version' => '5.0'
        ], [
            'emoji' => '🤫',
            'category' => 0,
            'name' => 'shushing face',
            'version' => '5.0'
        ], [
            'emoji' => '🤔',
            'category' => 0,
            'name' => 'thinking face',
            'version' => '1.0'
        ], [
            'emoji' => '🤐',
            'category' => 0,
            'name' => 'zipper-mouth face',
            'version' => '1.0'
        ], [
            'emoji' => '🤨',
            'category' => 0,
            'name' => 'face with raised eyebrow',
            'version' => '5.0'
        ], [
            'emoji' => '😐',
            'category' => 0,
            'name' => 'neutral face',
            'version' => '1.0'
        ], [
            'emoji' => '😑',
            'category' => 0,
            'name' => 'expressionless face',
            'version' => '1.0'
        ], [
            'emoji' => '😶',
            'category' => 0,
            'name' => 'face without mouth',
            'version' => '1.0'
        ], [
            'emoji' => '😏',
            'category' => 0,
            'name' => 'smirking face',
            'version' => '1.0'
        ], [
            'emoji' => '😒',
            'category' => 0,
            'name' => 'unamused face',
            'version' => '1.0'
        ], [
            'emoji' => '🙄',
            'category' => 0,
            'name' => 'face with rolling eyes',
            'version' => '1.0'
        ], [
            'emoji' => '😬',
            'category' => 0,
            'name' => 'grimacing face',
            'version' => '1.0'
        ], [
            'emoji' => '🤥',
            'category' => 0,
            'name' => 'lying face',
            'version' => '3.0'
        ], [
            'emoji' => '😌',
            'category' => 0,
            'name' => 'relieved face',
            'version' => '1.0'
        ], [
            'emoji' => '😔',
            'category' => 0,
            'name' => 'pensive face',
            'version' => '1.0'
        ], [
            'emoji' => '😪',
            'category' => 0,
            'name' => 'sleepy face',
            'version' => '1.0'
        ], [
            'emoji' => '🤤',
            'category' => 0,
            'name' => 'drooling face',
            'version' => '3.0'
        ], [
            'emoji' => '😴',
            'category' => 0,
            'name' => 'sleeping face',
            'version' => '1.0'
        ], [
            'emoji' => '😷',
            'category' => 0,
            'name' => 'face with medical mask',
            'version' => '1.0'
        ], [
            'emoji' => '🤒',
            'category' => 0,
            'name' => 'face with thermometer',
            'version' => '1.0'
        ], [
            'emoji' => '🤕',
            'category' => 0,
            'name' => 'face with head-bandage',
            'version' => '1.0'
        ], [
            'emoji' => '🤢',
            'category' => 0,
            'name' => 'nauseated face',
            'version' => '3.0'
        ], [
            'emoji' => '🤮',
            'category' => 0,
            'name' => 'face vomiting',
            'version' => '5.0'
        ], [
            'emoji' => '🤧',
            'category' => 0,
            'name' => 'sneezing face',
            'version' => '3.0'
        ], [
            'emoji' => '🥵',
            'category' => 0,
            'name' => 'hot face',
            'version' => '11.0'
        ], [
            'emoji' => '🥶',
            'category' => 0,
            'name' => 'cold face',
            'version' => '11.0'
        ], [
            'emoji' => '🥴',
            'category' => 0,
            'name' => 'woozy face',
            'version' => '11.0'
        ], [
            'emoji' => '😵',
            'category' => 0,
            'name' => 'dizzy face',
            'version' => '1.0'
        ], [
            'emoji' => '🤯',
            'category' => 0,
            'name' => 'exploding head',
            'version' => '5.0'
        ], [
            'emoji' => '🤠',
            'category' => 0,
            'name' => 'cowboy hat face',
            'version' => '3.0'
        ], [
            'emoji' => '🥳',
            'category' => 0,
            'name' => 'partying face',
            'version' => '11.0'
        ], [
            'emoji' => '🥸',
            'category' => 0,
            'name' => 'disguised face',
            'version' => '13.0'
        ], [
            'emoji' => '😎',
            'category' => 0,
            'name' => 'smiling face with sunglasses',
            'version' => '1.0'
        ], [
            'emoji' => '🤓',
            'category' => 0,
            'name' => 'nerd face',
            'version' => '1.0'
        ], [
            'emoji' => '🧐',
            'category' => 0,
            'name' => 'face with monocle',
            'version' => '5.0'
        ], [
            'emoji' => '😕',
            'category' => 0,
            'name' => 'confused face',
            'version' => '1.0'
        ], [
            'emoji' => '😟',
            'category' => 0,
            'name' => 'worried face',
            'version' => '1.0'
        ], [
            'emoji' => '🙁',
            'category' => 0,
            'name' => 'slightly frowning face',
            'version' => '1.0'
        ], [
            'emoji' => '☹️',
            'category' => 0,
            'name' => 'frowning face',
            'version' => '1.0'
        ], [
            'emoji' => '😮',
            'category' => 0,
            'name' => 'face with open mouth',
            'version' => '1.0'
        ], [
            'emoji' => '😯',
            'category' => 0,
            'name' => 'hushed face',
            'version' => '1.0'
        ], [
            'emoji' => '😲',
            'category' => 0,
            'name' => 'astonished face',
            'version' => '1.0'
        ], [
            'emoji' => '😳',
            'category' => 0,
            'name' => 'flushed face',
            'version' => '1.0'
        ], [
            'emoji' => '🥺',
            'category' => 0,
            'name' => 'pleading face',
            'version' => '11.0'
        ], [
            'emoji' => '😦',
            'category' => 0,
            'name' => 'frowning face with open mouth',
            'version' => '1.0'
        ], [
            'emoji' => '😧',
            'category' => 0,
            'name' => 'anguished face',
            'version' => '1.0'
        ], [
            'emoji' => '😨',
            'category' => 0,
            'name' => 'fearful face',
            'version' => '1.0'
        ], [
            'emoji' => '😰',
            'category' => 0,
            'name' => 'anxious face with sweat',
            'version' => '1.0'
        ], [
            'emoji' => '😥',
            'category' => 0,
            'name' => 'sad but relieved face',
            'version' => '1.0'
        ], [
            'emoji' => '😢',
            'category' => 0,
            'name' => 'crying face',
            'version' => '1.0'
        ], [
            'emoji' => '😭',
            'category' => 0,
            'name' => 'loudly crying face',
            'version' => '1.0'
        ], [
            'emoji' => '😱',
            'category' => 0,
            'name' => 'face screaming in fear',
            'version' => '1.0'
        ], [
            'emoji' => '😖',
            'category' => 0,
            'name' => 'confounded face',
            'version' => '1.0'
        ], [
            'emoji' => '😣',
            'category' => 0,
            'name' => 'persevering face',
            'version' => '1.0'
        ], [
            'emoji' => '😞',
            'category' => 0,
            'name' => 'disappointed face',
            'version' => '1.0'
        ], [
            'emoji' => '😓',
            'category' => 0,
            'name' => 'downcast face with sweat',
            'version' => '1.0'
        ], [
            'emoji' => '😩',
            'category' => 0,
            'name' => 'weary face',
            'version' => '1.0'
        ], [
            'emoji' => '😫',
            'category' => 0,
            'name' => 'tired face',
            'version' => '1.0'
        ], [
            'emoji' => '🥱',
            'category' => 0,
            'name' => 'yawning face',
            'version' => '12.0'
        ], [
            'emoji' => '😤',
            'category' => 0,
            'name' => 'face with steam from nose',
            'version' => '1.0'
        ], [
            'emoji' => '😡',
            'category' => 0,
            'name' => 'pouting face',
            'version' => '1.0'
        ], [
            'emoji' => '😠',
            'category' => 0,
            'name' => 'angry face',
            'version' => '1.0'
        ], [
            'emoji' => '🤬',
            'category' => 0,
            'name' => 'face with symbols on mouth',
            'version' => '5.0'
        ], [
            'emoji' => '😈',
            'category' => 0,
            'name' => 'smiling face with horns',
            'version' => '1.0'
        ], [
            'emoji' => '👿',
            'category' => 0,
            'name' => 'angry face with horns',
            'version' => '1.0'
        ], [
            'emoji' => '💀',
            'category' => 0,
            'name' => 'skull',
            'version' => '1.0'
        ], [
            'emoji' => '☠️',
            'category' => 0,
            'name' => 'skull and crossbones',
            'version' => '1.0'
        ], [
            'emoji' => '💩',
            'category' => 0,
            'name' => 'pile of poo',
            'version' => '1.0'
        ], [
            'emoji' => '🤡',
            'category' => 0,
            'name' => 'clown face',
            'version' => '3.0'
        ], [
            'emoji' => '👹',
            'category' => 0,
            'name' => 'ogre',
            'version' => '1.0'
        ], [
            'emoji' => '👺',
            'category' => 0,
            'name' => 'goblin',
            'version' => '1.0'
        ], [
            'emoji' => '👻',
            'category' => 0,
            'name' => 'ghost',
            'version' => '1.0'
        ], [
            'emoji' => '👽',
            'category' => 0,
            'name' => 'alien',
            'version' => '1.0'
        ], [
            'emoji' => '👾',
            'category' => 0,
            'name' => 'alien monster',
            'version' => '1.0'
        ], [
            'emoji' => '🤖',
            'category' => 0,
            'name' => 'robot',
            'version' => '1.0'
        ], [
            'emoji' => '😺',
            'category' => 0,
            'name' => 'grinning cat',
            'version' => '1.0'
        ], [
            'emoji' => '😸',
            'category' => 0,
            'name' => 'grinning cat with smiling eyes',
            'version' => '1.0'
        ], [
            'emoji' => '😹',
            'category' => 0,
            'name' => 'cat with tears of joy',
            'version' => '1.0'
        ], [
            'emoji' => '😻',
            'category' => 0,
            'name' => 'smiling cat with heart-eyes',
            'version' => '1.0'
        ], [
            'emoji' => '😼',
            'category' => 0,
            'name' => 'cat with wry smile',
            'version' => '1.0'
        ], [
            'emoji' => '😽',
            'category' => 0,
            'name' => 'kissing cat',
            'version' => '1.0'
        ], [
            'emoji' => '🙀',
            'category' => 0,
            'name' => 'weary cat',
            'version' => '1.0'
        ], [
            'emoji' => '😿',
            'category' => 0,
            'name' => 'crying cat',
            'version' => '1.0'
        ], [
            'emoji' => '😾',
            'category' => 0,
            'name' => 'pouting cat',
            'version' => '1.0'
        ], [
            'emoji' => '🙈',
            'category' => 0,
            'name' => 'see-no-evil monkey',
            'version' => '1.0'
        ], [
            'emoji' => '🙉',
            'category' => 0,
            'name' => 'hear-no-evil monkey',
            'version' => '1.0'
        ], [
            'emoji' => '🙊',
            'category' => 0,
            'name' => 'speak-no-evil monkey',
            'version' => '1.0'
        ], [
            'emoji' => '💋',
            'category' => 0,
            'name' => 'kiss mark',
            'version' => '1.0'
        ], [
            'emoji' => '💌',
            'category' => 0,
            'name' => 'love letter',
            'version' => '1.0'
        ], [
            'emoji' => '💘',
            'category' => 0,
            'name' => 'heart with arrow',
            'version' => '1.0'
        ], [
            'emoji' => '💝',
            'category' => 0,
            'name' => 'heart with ribbon',
            'version' => '1.0'
        ], [
            'emoji' => '💖',
            'category' => 0,
            'name' => 'sparkling heart',
            'version' => '1.0'
        ], [
            'emoji' => '💗',
            'category' => 0,
            'name' => 'growing heart',
            'version' => '1.0'
        ], [
            'emoji' => '💓',
            'category' => 0,
            'name' => 'beating heart',
            'version' => '1.0'
        ], [
            'emoji' => '💞',
            'category' => 0,
            'name' => 'revolving hearts',
            'version' => '1.0'
        ], [
            'emoji' => '💕',
            'category' => 0,
            'name' => 'two hearts',
            'version' => '1.0'
        ], [
            'emoji' => '💟',
            'category' => 0,
            'name' => 'heart decoration',
            'version' => '1.0'
        ], [
            'emoji' => '❣️',
            'category' => 0,
            'name' => 'heart exclamation',
            'version' => '1.0'
        ], [
            'emoji' => '💔',
            'category' => 0,
            'name' => 'broken heart',
            'version' => '1.0'
        ], [
            'emoji' => '❤️',
            'category' => 0,
            'name' => 'red heart',
            'version' => '1.0'
        ], [
            'emoji' => '🧡',
            'category' => 0,
            'name' => 'orange heart',
            'version' => '5.0'
        ], [
            'emoji' => '💛',
            'category' => 0,
            'name' => 'yellow heart',
            'version' => '1.0'
        ], [
            'emoji' => '💚',
            'category' => 0,
            'name' => 'green heart',
            'version' => '1.0'
        ], [
            'emoji' => '💙',
            'category' => 0,
            'name' => 'blue heart',
            'version' => '1.0'
        ], [
            'emoji' => '💜',
            'category' => 0,
            'name' => 'purple heart',
            'version' => '1.0'
        ], [
            'emoji' => '🤎',
            'category' => 0,
            'name' => 'brown heart',
            'version' => '12.0'
        ], [
            'emoji' => '🖤',
            'category' => 0,
            'name' => 'black heart',
            'version' => '3.0'
        ], [
            'emoji' => '🤍',
            'category' => 0,
            'name' => 'white heart',
            'version' => '12.0'
        ], [
            'emoji' => '💯',
            'category' => 0,
            'name' => 'hundred points',
            'version' => '1.0'
        ], [
            'emoji' => '💢',
            'category' => 0,
            'name' => 'anger symbol',
            'version' => '1.0'
        ], [
            'emoji' => '💥',
            'category' => 0,
            'name' => 'collision',
            'version' => '1.0'
        ], [
            'emoji' => '💫',
            'category' => 0,
            'name' => 'dizzy',
            'version' => '1.0'
        ], [
            'emoji' => '💦',
            'category' => 0,
            'name' => 'sweat droplets',
            'version' => '1.0'
        ], [
            'emoji' => '💨',
            'category' => 0,
            'name' => 'dashing away',
            'version' => '1.0'
        ], [
            'emoji' => '🕳️',
            'category' => 0,
            'name' => 'hole',
            'version' => '1.0'
        ], [
            'emoji' => '💣',
            'category' => 0,
            'name' => 'bomb',
            'version' => '1.0'
        ], [
            'emoji' => '💬',
            'category' => 0,
            'name' => 'speech balloon',
            'version' => '1.0'
        ], [
            'emoji' => '👁️‍🗨️',
            'category' => 0,
            'name' => 'eye in speech bubble',
            'version' => '2.0'
        ], [
            'emoji' => '🗨️',
            'category' => 0,
            'name' => 'left speech bubble',
            'version' => '2.0'
        ], [
            'emoji' => '🗯️',
            'category' => 0,
            'name' => 'right anger bubble',
            'version' => '1.0'
        ], [
            'emoji' => '💭',
            'category' => 0,
            'name' => 'thought balloon',
            'version' => '1.0'
        ], [
            'emoji' => '💤',
            'category' => 0,
            'name' => 'zzz',
            'version' => '1.0'
        ], [
            'emoji' => '👋',
            'category' => 1,
            'name' => 'waving hand',
            'variations' => ['👋🏻', '👋🏼', '👋🏽', '👋🏾', '👋🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '🤚',
            'category' => 1,
            'name' => 'raised back of hand',
            'variations' => ['🤚🏻', '🤚🏼', '🤚🏽', '🤚🏾', '🤚🏿'],
            'version' => '3.0'
        ], [
            'emoji' => '🖐️',
            'category' => 1,
            'name' => 'hand with fingers splayed',
            'variations' => ['🖐🏻', '🖐🏼', '🖐🏽', '🖐🏾', '🖐🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '✋',
            'category' => 1,
            'name' => 'raised hand',
            'variations' => ['✋🏻', '✋🏼', '✋🏽', '✋🏾', '✋🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '🖖',
            'category' => 1,
            'name' => 'vulcan salute',
            'variations' => ['🖖🏻', '🖖🏼', '🖖🏽', '🖖🏾', '🖖🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '👌',
            'category' => 1,
            'name' => 'OK hand',
            'variations' => ['👌🏻', '👌🏼', '👌🏽', '👌🏾', '👌🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '🤌',
            'category' => 1,
            'name' => 'pinched fingers',
            'variations' => ['🤌🏻', '🤌🏼', '🤌🏽', '🤌🏾', '🤌🏿'],
            'version' => '13.0'
        ], [
            'emoji' => '🤏',
            'category' => 1,
            'name' => 'pinching hand',
            'variations' => ['🤏🏻', '🤏🏼', '🤏🏽', '🤏🏾', '🤏🏿'],
            'version' => '12.0'
        ], [
            'emoji' => '✌️',
            'category' => 1,
            'name' => 'victory hand',
            'variations' => ['✌🏻', '✌🏼', '✌🏽', '✌🏾', '✌🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '🤞',
            'category' => 1,
            'name' => 'crossed fingers',
            'variations' => ['🤞🏻', '🤞🏼', '🤞🏽', '🤞🏾', '🤞🏿'],
            'version' => '3.0'
        ], [
            'emoji' => '🤟',
            'category' => 1,
            'name' => 'love-you gesture',
            'variations' => ['🤟🏻', '🤟🏼', '🤟🏽', '🤟🏾', '🤟🏿'],
            'version' => '5.0'
        ], [
            'emoji' => '🤘',
            'category' => 1,
            'name' => 'sign of the horns',
            'variations' => ['🤘🏻', '🤘🏼', '🤘🏽', '🤘🏾', '🤘🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '🤙',
            'category' => 1,
            'name' => 'call me hand',
            'variations' => ['🤙🏻', '🤙🏼', '🤙🏽', '🤙🏾', '🤙🏿'],
            'version' => '3.0'
        ], [
            'emoji' => '👈',
            'category' => 1,
            'name' => 'backhand index pointing left',
            'variations' => ['👈🏻', '👈🏼', '👈🏽', '👈🏾', '👈🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '👉',
            'category' => 1,
            'name' => 'backhand index pointing right',
            'variations' => ['👉🏻', '👉🏼', '👉🏽', '👉🏾', '👉🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '👆',
            'category' => 1,
            'name' => 'backhand index pointing up',
            'variations' => ['👆🏻', '👆🏼', '👆🏽', '👆🏾', '👆🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '🖕',
            'category' => 1,
            'name' => 'middle finger',
            'variations' => ['🖕🏻', '🖕🏼', '🖕🏽', '🖕🏾', '🖕🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '👇',
            'category' => 1,
            'name' => 'backhand index pointing down',
            'variations' => ['👇🏻', '👇🏼', '👇🏽', '👇🏾', '👇🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '☝️',
            'category' => 1,
            'name' => 'index pointing up',
            'variations' => ['☝🏻', '☝🏼', '☝🏽', '☝🏾', '☝🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '👍',
            'category' => 1,
            'name' => 'thumbs up',
            'variations' => ['👍🏻', '👍🏼', '👍🏽', '👍🏾', '👍🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '👎',
            'category' => 1,
            'name' => 'thumbs down',
            'variations' => ['👎🏻', '👎🏼', '👎🏽', '👎🏾', '👎🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '✊',
            'category' => 1,
            'name' => 'raised fist',
            'variations' => ['✊🏻', '✊🏼', '✊🏽', '✊🏾', '✊🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '👊',
            'category' => 1,
            'name' => 'oncoming fist',
            'variations' => ['👊🏻', '👊🏼', '👊🏽', '👊🏾', '👊🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '🤛',
            'category' => 1,
            'name' => 'left-facing fist',
            'variations' => ['🤛🏻', '🤛🏼', '🤛🏽', '🤛🏾', '🤛🏿'],
            'version' => '3.0'
        ], [
            'emoji' => '🤜',
            'category' => 1,
            'name' => 'right-facing fist',
            'variations' => ['🤜🏻', '🤜🏼', '🤜🏽', '🤜🏾', '🤜🏿'],
            'version' => '3.0'
        ], [
            'emoji' => '👏',
            'category' => 1,
            'name' => 'clapping hands',
            'variations' => ['👏🏻', '👏🏼', '👏🏽', '👏🏾', '👏🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '🙌',
            'category' => 1,
            'name' => 'raising hands',
            'variations' => ['🙌🏻', '🙌🏼', '🙌🏽', '🙌🏾', '🙌🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '👐',
            'category' => 1,
            'name' => 'open hands',
            'variations' => ['👐🏻', '👐🏼', '👐🏽', '👐🏾', '👐🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '🤲',
            'category' => 1,
            'name' => 'palms up together',
            'variations' => ['🤲🏻', '🤲🏼', '🤲🏽', '🤲🏾', '🤲🏿'],
            'version' => '5.0'
        ], [
            'emoji' => '🤝',
            'category' => 1,
            'name' => 'handshake',
            'version' => '3.0'
        ], [
            'emoji' => '🙏',
            'category' => 1,
            'name' => 'folded hands',
            'variations' => ['🙏🏻', '🙏🏼', '🙏🏽', '🙏🏾', '🙏🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '✍️',
            'category' => 1,
            'name' => 'writing hand',
            'variations' => ['✍🏻', '✍🏼', '✍🏽', '✍🏾', '✍🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '💅',
            'category' => 1,
            'name' => 'nail polish',
            'variations' => ['💅🏻', '💅🏼', '💅🏽', '💅🏾', '💅🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '🤳',
            'category' => 1,
            'name' => 'selfie',
            'variations' => ['🤳🏻', '🤳🏼', '🤳🏽', '🤳🏾', '🤳🏿'],
            'version' => '3.0'
        ], [
            'emoji' => '💪',
            'category' => 1,
            'name' => 'flexed biceps',
            'variations' => ['💪🏻', '💪🏼', '💪🏽', '💪🏾', '💪🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '🦾',
            'category' => 1,
            'name' => 'mechanical arm',
            'version' => '12.0'
        ], [
            'emoji' => '🦿',
            'category' => 1,
            'name' => 'mechanical leg',
            'version' => '12.0'
        ], [
            'emoji' => '🦵',
            'category' => 1,
            'name' => 'leg',
            'variations' => ['🦵🏻', '🦵🏼', '🦵🏽', '🦵🏾', '🦵🏿'],
            'version' => '11.0'
        ], [
            'emoji' => '🦶',
            'category' => 1,
            'name' => 'foot',
            'variations' => ['🦶🏻', '🦶🏼', '🦶🏽', '🦶🏾', '🦶🏿'],
            'version' => '11.0'
        ], [
            'emoji' => '👂',
            'category' => 1,
            'name' => 'ear',
            'variations' => ['👂🏻', '👂🏼', '👂🏽', '👂🏾', '👂🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '🦻',
            'category' => 1,
            'name' => 'ear with hearing aid',
            'variations' => ['🦻🏻', '🦻🏼', '🦻🏽', '🦻🏾', '🦻🏿'],
            'version' => '12.0'
        ], [
            'emoji' => '👃',
            'category' => 1,
            'name' => 'nose',
            'variations' => ['👃🏻', '👃🏼', '👃🏽', '👃🏾', '👃🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '🧠',
            'category' => 1,
            'name' => 'brain',
            'version' => '5.0'
        ], [
            'emoji' => '🫀',
            'category' => 1,
            'name' => 'anatomical heart',
            'version' => '13.0'
        ], [
            'emoji' => '🫁',
            'category' => 1,
            'name' => 'lungs',
            'version' => '13.0'
        ], [
            'emoji' => '🦷',
            'category' => 1,
            'name' => 'tooth',
            'version' => '11.0'
        ], [
            'emoji' => '🦴',
            'category' => 1,
            'name' => 'bone',
            'version' => '11.0'
        ], [
            'emoji' => '👀',
            'category' => 1,
            'name' => 'eyes',
            'version' => '1.0'
        ], [
            'emoji' => '👁️',
            'category' => 1,
            'name' => 'eye',
            'version' => '1.0'
        ], [
            'emoji' => '👅',
            'category' => 1,
            'name' => 'tongue',
            'version' => '1.0'
        ], [
            'emoji' => '👄',
            'category' => 1,
            'name' => 'mouth',
            'version' => '1.0'
        ], [
            'emoji' => '👶',
            'category' => 1,
            'name' => 'baby',
            'variations' => ['👶🏻', '👶🏼', '👶🏽', '👶🏾', '👶🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '🧒',
            'category' => 1,
            'name' => 'child',
            'variations' => ['🧒🏻', '🧒🏼', '🧒🏽', '🧒🏾', '🧒🏿'],
            'version' => '5.0'
        ], [
            'emoji' => '👦',
            'category' => 1,
            'name' => 'boy',
            'variations' => ['👦🏻', '👦🏼', '👦🏽', '👦🏾', '👦🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '👧',
            'category' => 1,
            'name' => 'girl',
            'variations' => ['👧🏻', '👧🏼', '👧🏽', '👧🏾', '👧🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '🧑',
            'category' => 1,
            'name' => 'person',
            'variations' => ['🧑🏻', '🧑🏼', '🧑🏽', '🧑🏾', '🧑🏿'],
            'version' => '5.0'
        ], [
            'emoji' => '👱',
            'category' => 1,
            'name' => 'person with blond hair',
            'variations' => ['👱🏻', '👱🏼', '👱🏽', '👱🏾', '👱🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '👨',
            'category' => 1,
            'name' => 'man',
            'variations' => ['👨🏻', '👨🏼', '👨🏽', '👨🏾', '👨🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '🧔',
            'category' => 1,
            'name' => 'man with beard',
            'variations' => ['🧔🏻', '🧔🏼', '🧔🏽', '🧔🏾', '🧔🏿'],
            'version' => '5.0'
        ], [
            'emoji' => '👨‍🦰',
            'category' => 1,
            'name' => 'man with red hair',
            'variations' => ['👨🏻‍🦰', '👨🏼‍🦰', '👨🏽‍🦰', '👨🏾‍🦰', '👨🏿‍🦰'],
            'version' => '11.0'
        ], [
            'emoji' => '👨‍🦱',
            'category' => 1,
            'name' => 'man with curly hair',
            'variations' => ['👨🏻‍🦱', '👨🏼‍🦱', '👨🏽‍🦱', '👨🏾‍🦱', '👨🏿‍🦱'],
            'version' => '11.0'
        ], [
            'emoji' => '👨‍🦳',
            'category' => 1,
            'name' => 'man with white hair',
            'variations' => ['👨🏻‍🦳', '👨🏼‍🦳', '👨🏽‍🦳', '👨🏾‍🦳', '👨🏿‍🦳'],
            'version' => '11.0'
        ], [
            'emoji' => '👨‍🦲',
            'category' => 1,
            'name' => 'man with no hair',
            'variations' => ['👨🏻‍🦲', '👨🏼‍🦲', '👨🏽‍🦲', '👨🏾‍🦲', '👨🏿‍🦲'],
            'version' => '11.0'
        ], [
            'emoji' => '👩',
            'category' => 1,
            'name' => 'woman',
            'variations' => ['👩🏻', '👩🏼', '👩🏽', '👩🏾', '👩🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '👩‍🦰',
            'category' => 1,
            'name' => 'woman with red hair',
            'variations' => ['👩🏻‍🦰', '👩🏼‍🦰', '👩🏽‍🦰', '👩🏾‍🦰', '👩🏿‍🦰'],
            'version' => '11.0'
        ], [
            'emoji' => '🧑‍🦰',
            'category' => 1,
            'name' => 'person with red hair',
            'variations' => ['🧑🏻‍🦰', '🧑🏼‍🦰', '🧑🏽‍🦰', '🧑🏾‍🦰', '🧑🏿‍🦰'],
            'version' => '12.1'
        ], [
            'emoji' => '👩‍🦱',
            'category' => 1,
            'name' => 'woman with curly hair',
            'variations' => ['👩🏻‍🦱', '👩🏼‍🦱', '👩🏽‍🦱', '👩🏾‍🦱', '👩🏿‍🦱'],
            'version' => '11.0'
        ], [
            'emoji' => '🧑‍🦱',
            'category' => 1,
            'name' => 'person with curly hair',
            'variations' => ['🧑🏻‍🦱', '🧑🏼‍🦱', '🧑🏽‍🦱', '🧑🏾‍🦱', '🧑🏿‍🦱'],
            'version' => '12.1'
        ], [
            'emoji' => '👩‍🦳',
            'category' => 1,
            'name' => 'woman with white hair',
            'variations' => ['👩🏻‍🦳', '👩🏼‍🦳', '👩🏽‍🦳', '👩🏾‍🦳', '👩🏿‍🦳'],
            'version' => '11.0'
        ], [
            'emoji' => '🧑‍🦳',
            'category' => 1,
            'name' => 'person with white hair',
            'variations' => ['🧑🏻‍🦳', '🧑🏼‍🦳', '🧑🏽‍🦳', '🧑🏾‍🦳', '🧑🏿‍🦳'],
            'version' => '12.1'
        ], [
            'emoji' => '👩‍🦲',
            'category' => 1,
            'name' => 'woman with no hair',
            'variations' => ['👩🏻‍🦲', '👩🏼‍🦲', '👩🏽‍🦲', '👩🏾‍🦲', '👩🏿‍🦲'],
            'version' => '11.0'
        ], [
            'emoji' => '🧑‍🦲',
            'category' => 1,
            'name' => 'person with no hair',
            'variations' => ['🧑🏻‍🦲', '🧑🏼‍🦲', '🧑🏽‍🦲', '🧑🏾‍🦲', '🧑🏿‍🦲'],
            'version' => '12.1'
        ], [
            'emoji' => '👱‍♀️',
            'category' => 1,
            'name' => 'woman with blond hair',
            'variations' => ['👱🏻‍♀️', '👱🏼‍♀️', '👱🏽‍♀️', '👱🏾‍♀️', '👱🏿‍♀️'],
            'version' => '4.0'
        ], [
            'emoji' => '👱‍♂️',
            'category' => 1,
            'name' => 'man with blond hair',
            'variations' => ['👱🏻‍♂️', '👱🏼‍♂️', '👱🏽‍♂️', '👱🏾‍♂️', '👱🏿‍♂️'],
            'version' => '4.0'
        ], [
            'emoji' => '🧓',
            'category' => 1,
            'name' => 'older person',
            'variations' => ['🧓🏻', '🧓🏼', '🧓🏽', '🧓🏾', '🧓🏿'],
            'version' => '5.0'
        ], [
            'emoji' => '👴',
            'category' => 1,
            'name' => 'old man',
            'variations' => ['👴🏻', '👴🏼', '👴🏽', '👴🏾', '👴🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '👵',
            'category' => 1,
            'name' => 'old woman',
            'variations' => ['👵🏻', '👵🏼', '👵🏽', '👵🏾', '👵🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '🙍',
            'category' => 1,
            'name' => 'person frowning',
            'variations' => ['🙍🏻', '🙍🏼', '🙍🏽', '🙍🏾', '🙍🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '🙍‍♂️',
            'category' => 1,
            'name' => 'man frowning',
            'variations' => ['🙍🏻‍♂️', '🙍🏼‍♂️', '🙍🏽‍♂️', '🙍🏾‍♂️', '🙍🏿‍♂️'],
            'version' => '4.0'
        ], [
            'emoji' => '🙍‍♀️',
            'category' => 1,
            'name' => 'woman frowning',
            'variations' => ['🙍🏻‍♀️', '🙍🏼‍♀️', '🙍🏽‍♀️', '🙍🏾‍♀️', '🙍🏿‍♀️'],
            'version' => '4.0'
        ], [
            'emoji' => '🙎',
            'category' => 1,
            'name' => 'person pouting',
            'variations' => ['🙎🏻', '🙎🏼', '🙎🏽', '🙎🏾', '🙎🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '🙎‍♂️',
            'category' => 1,
            'name' => 'man pouting',
            'variations' => ['🙎🏻‍♂️', '🙎🏼‍♂️', '🙎🏽‍♂️', '🙎🏾‍♂️', '🙎🏿‍♂️'],
            'version' => '4.0'
        ], [
            'emoji' => '🙎‍♀️',
            'category' => 1,
            'name' => 'woman pouting',
            'variations' => ['🙎🏻‍♀️', '🙎🏼‍♀️', '🙎🏽‍♀️', '🙎🏾‍♀️', '🙎🏿‍♀️'],
            'version' => '4.0'
        ], [
            'emoji' => '🙅',
            'category' => 1,
            'name' => 'person gesturing NO',
            'variations' => ['🙅🏻', '🙅🏼', '🙅🏽', '🙅🏾', '🙅🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '🙅‍♂️',
            'category' => 1,
            'name' => 'man gesturing NO',
            'variations' => ['🙅🏻‍♂️', '🙅🏼‍♂️', '🙅🏽‍♂️', '🙅🏾‍♂️', '🙅🏿‍♂️'],
            'version' => '4.0'
        ], [
            'emoji' => '🙅‍♀️',
            'category' => 1,
            'name' => 'woman gesturing NO',
            'variations' => ['🙅🏻‍♀️', '🙅🏼‍♀️', '🙅🏽‍♀️', '🙅🏾‍♀️', '🙅🏿‍♀️'],
            'version' => '4.0'
        ], [
            'emoji' => '🙆',
            'category' => 1,
            'name' => 'person gesturing OK',
            'variations' => ['🙆🏻', '🙆🏼', '🙆🏽', '🙆🏾', '🙆🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '🙆‍♂️',
            'category' => 1,
            'name' => 'man gesturing OK',
            'variations' => ['🙆🏻‍♂️', '🙆🏼‍♂️', '🙆🏽‍♂️', '🙆🏾‍♂️', '🙆🏿‍♂️'],
            'version' => '4.0'
        ], [
            'emoji' => '🙆‍♀️',
            'category' => 1,
            'name' => 'woman gesturing OK',
            'variations' => ['🙆🏻‍♀️', '🙆🏼‍♀️', '🙆🏽‍♀️', '🙆🏾‍♀️', '🙆🏿‍♀️'],
            'version' => '4.0'
        ], [
            'emoji' => '💁',
            'category' => 1,
            'name' => 'person tipping hand',
            'variations' => ['💁🏻', '💁🏼', '💁🏽', '💁🏾', '💁🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '💁‍♂️',
            'category' => 1,
            'name' => 'man tipping hand',
            'variations' => ['💁🏻‍♂️', '💁🏼‍♂️', '💁🏽‍♂️', '💁🏾‍♂️', '💁🏿‍♂️'],
            'version' => '4.0'
        ], [
            'emoji' => '💁‍♀️',
            'category' => 1,
            'name' => 'woman tipping hand',
            'variations' => ['💁🏻‍♀️', '💁🏼‍♀️', '💁🏽‍♀️', '💁🏾‍♀️', '💁🏿‍♀️'],
            'version' => '4.0'
        ], [
            'emoji' => '🙋',
            'category' => 1,
            'name' => 'person raising hand',
            'variations' => ['🙋🏻', '🙋🏼', '🙋🏽', '🙋🏾', '🙋🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '🙋‍♂️',
            'category' => 1,
            'name' => 'man raising hand',
            'variations' => ['🙋🏻‍♂️', '🙋🏼‍♂️', '🙋🏽‍♂️', '🙋🏾‍♂️', '🙋🏿‍♂️'],
            'version' => '4.0'
        ], [
            'emoji' => '🙋‍♀️',
            'category' => 1,
            'name' => 'woman raising hand',
            'variations' => ['🙋🏻‍♀️', '🙋🏼‍♀️', '🙋🏽‍♀️', '🙋🏾‍♀️', '🙋🏿‍♀️'],
            'version' => '4.0'
        ], [
            'emoji' => '🧏',
            'category' => 1,
            'name' => 'deaf person',
            'variations' => ['🧏🏻', '🧏🏼', '🧏🏽', '🧏🏾', '🧏🏿'],
            'version' => '12.0'
        ], [
            'emoji' => '🧏‍♂️',
            'category' => 1,
            'name' => 'deaf man',
            'variations' => ['🧏🏻‍♂️', '🧏🏼‍♂️', '🧏🏽‍♂️', '🧏🏾‍♂️', '🧏🏿‍♂️'],
            'version' => '12.0'
        ], [
            'emoji' => '🧏‍♀️',
            'category' => 1,
            'name' => 'deaf woman',
            'variations' => ['🧏🏻‍♀️', '🧏🏼‍♀️', '🧏🏽‍♀️', '🧏🏾‍♀️', '🧏🏿‍♀️'],
            'version' => '12.0'
        ], [
            'emoji' => '🙇',
            'category' => 1,
            'name' => 'person bowing',
            'variations' => ['🙇🏻', '🙇🏼', '🙇🏽', '🙇🏾', '🙇🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '🙇‍♂️',
            'category' => 1,
            'name' => 'man bowing',
            'variations' => ['🙇🏻‍♂️', '🙇🏼‍♂️', '🙇🏽‍♂️', '🙇🏾‍♂️', '🙇🏿‍♂️'],
            'version' => '4.0'
        ], [
            'emoji' => '🙇‍♀️',
            'category' => 1,
            'name' => 'woman bowing',
            'variations' => ['🙇🏻‍♀️', '🙇🏼‍♀️', '🙇🏽‍♀️', '🙇🏾‍♀️', '🙇🏿‍♀️'],
            'version' => '4.0'
        ], [
            'emoji' => '🤦',
            'category' => 1,
            'name' => 'person facepalming',
            'variations' => ['🤦🏻', '🤦🏼', '🤦🏽', '🤦🏾', '🤦🏿'],
            'version' => '3.0'
        ], [
            'emoji' => '🤦‍♂️',
            'category' => 1,
            'name' => 'man facepalming',
            'variations' => ['🤦🏻‍♂️', '🤦🏼‍♂️', '🤦🏽‍♂️', '🤦🏾‍♂️', '🤦🏿‍♂️'],
            'version' => '4.0'
        ], [
            'emoji' => '🤦‍♀️',
            'category' => 1,
            'name' => 'woman facepalming',
            'variations' => ['🤦🏻‍♀️', '🤦🏼‍♀️', '🤦🏽‍♀️', '🤦🏾‍♀️', '🤦🏿‍♀️'],
            'version' => '4.0'
        ], [
            'emoji' => '🤷',
            'category' => 1,
            'name' => 'person shrugging',
            'variations' => ['🤷🏻', '🤷🏼', '🤷🏽', '🤷🏾', '🤷🏿'],
            'version' => '3.0'
        ], [
            'emoji' => '🤷‍♂️',
            'category' => 1,
            'name' => 'man shrugging',
            'variations' => ['🤷🏻‍♂️', '🤷🏼‍♂️', '🤷🏽‍♂️', '🤷🏾‍♂️', '🤷🏿‍♂️'],
            'version' => '4.0'
        ], [
            'emoji' => '🤷‍♀️',
            'category' => 1,
            'name' => 'woman shrugging',
            'variations' => ['🤷🏻‍♀️', '🤷🏼‍♀️', '🤷🏽‍♀️', '🤷🏾‍♀️', '🤷🏿‍♀️'],
            'version' => '4.0'
        ], [
            'emoji' => '🧑‍⚕️',
            'category' => 1,
            'name' => 'health worker',
            'variations' => ['🧑🏻‍⚕️', '🧑🏼‍⚕️', '🧑🏽‍⚕️', '🧑🏾‍⚕️', '🧑🏿‍⚕️'],
            'version' => '12.1'
        ], [
            'emoji' => '👨‍⚕️',
            'category' => 1,
            'name' => 'man health worker',
            'variations' => ['👨🏻‍⚕️', '👨🏼‍⚕️', '👨🏽‍⚕️', '👨🏾‍⚕️', '👨🏿‍⚕️'],
            'version' => '4.0'
        ], [
            'emoji' => '👩‍⚕️',
            'category' => 1,
            'name' => 'woman health worker',
            'variations' => ['👩🏻‍⚕️', '👩🏼‍⚕️', '👩🏽‍⚕️', '👩🏾‍⚕️', '👩🏿‍⚕️'],
            'version' => '4.0'
        ], [
            'emoji' => '🧑‍🎓',
            'category' => 1,
            'name' => 'student',
            'variations' => ['🧑🏻‍🎓', '🧑🏼‍🎓', '🧑🏽‍🎓', '🧑🏾‍🎓', '🧑🏿‍🎓'],
            'version' => '12.1'
        ], [
            'emoji' => '👨‍🎓',
            'category' => 1,
            'name' => 'man student',
            'variations' => ['👨🏻‍🎓', '👨🏼‍🎓', '👨🏽‍🎓', '👨🏾‍🎓', '👨🏿‍🎓'],
            'version' => '4.0'
        ], [
            'emoji' => '👩‍🎓',
            'category' => 1,
            'name' => 'woman student',
            'variations' => ['👩🏻‍🎓', '👩🏼‍🎓', '👩🏽‍🎓', '👩🏾‍🎓', '👩🏿‍🎓'],
            'version' => '4.0'
        ], [
            'emoji' => '🧑‍🏫',
            'category' => 1,
            'name' => 'teacher',
            'variations' => ['🧑🏻‍🏫', '🧑🏼‍🏫', '🧑🏽‍🏫', '🧑🏾‍🏫', '🧑🏿‍🏫'],
            'version' => '12.1'
        ], [
            'emoji' => '👨‍🏫',
            'category' => 1,
            'name' => 'man teacher',
            'variations' => ['👨🏻‍🏫', '👨🏼‍🏫', '👨🏽‍🏫', '👨🏾‍🏫', '👨🏿‍🏫'],
            'version' => '4.0'
        ], [
            'emoji' => '👩‍🏫',
            'category' => 1,
            'name' => 'woman teacher',
            'variations' => ['👩🏻‍🏫', '👩🏼‍🏫', '👩🏽‍🏫', '👩🏾‍🏫', '👩🏿‍🏫'],
            'version' => '4.0'
        ], [
            'emoji' => '🧑‍⚖️',
            'category' => 1,
            'name' => 'judge',
            'variations' => ['🧑🏻‍⚖️', '🧑🏼‍⚖️', '🧑🏽‍⚖️', '🧑🏾‍⚖️', '🧑🏿‍⚖️'],
            'version' => '12.1'
        ], [
            'emoji' => '👨‍⚖️',
            'category' => 1,
            'name' => 'man judge',
            'variations' => ['👨🏻‍⚖️', '👨🏼‍⚖️', '👨🏽‍⚖️', '👨🏾‍⚖️', '👨🏿‍⚖️'],
            'version' => '4.0'
        ], [
            'emoji' => '👩‍⚖️',
            'category' => 1,
            'name' => 'woman judge',
            'variations' => ['👩🏻‍⚖️', '👩🏼‍⚖️', '👩🏽‍⚖️', '👩🏾‍⚖️', '👩🏿‍⚖️'],
            'version' => '4.0'
        ], [
            'emoji' => '🧑‍🌾',
            'category' => 1,
            'name' => 'farmer',
            'variations' => ['🧑🏻‍🌾', '🧑🏼‍🌾', '🧑🏽‍🌾', '🧑🏾‍🌾', '🧑🏿‍🌾'],
            'version' => '12.1'
        ], [
            'emoji' => '👨‍🌾',
            'category' => 1,
            'name' => 'man farmer',
            'variations' => ['👨🏻‍🌾', '👨🏼‍🌾', '👨🏽‍🌾', '👨🏾‍🌾', '👨🏿‍🌾'],
            'version' => '4.0'
        ], [
            'emoji' => '👩‍🌾',
            'category' => 1,
            'name' => 'woman farmer',
            'variations' => ['👩🏻‍🌾', '👩🏼‍🌾', '👩🏽‍🌾', '👩🏾‍🌾', '👩🏿‍🌾'],
            'version' => '4.0'
        ], [
            'emoji' => '🧑‍🍳',
            'category' => 1,
            'name' => 'cook',
            'variations' => ['🧑🏻‍🍳', '🧑🏼‍🍳', '🧑🏽‍🍳', '🧑🏾‍🍳', '🧑🏿‍🍳'],
            'version' => '12.1'
        ], [
            'emoji' => '👨‍🍳',
            'category' => 1,
            'name' => 'man cook',
            'variations' => ['👨🏻‍🍳', '👨🏼‍🍳', '👨🏽‍🍳', '👨🏾‍🍳', '👨🏿‍🍳'],
            'version' => '4.0'
        ], [
            'emoji' => '👩‍🍳',
            'category' => 1,
            'name' => 'woman cook',
            'variations' => ['👩🏻‍🍳', '👩🏼‍🍳', '👩🏽‍🍳', '👩🏾‍🍳', '👩🏿‍🍳'],
            'version' => '4.0'
        ], [
            'emoji' => '🧑‍🔧',
            'category' => 1,
            'name' => 'mechanic',
            'variations' => ['🧑🏻‍🔧', '🧑🏼‍🔧', '🧑🏽‍🔧', '🧑🏾‍🔧', '🧑🏿‍🔧'],
            'version' => '12.1'
        ], [
            'emoji' => '👨‍🔧',
            'category' => 1,
            'name' => 'man mechanic',
            'variations' => ['👨🏻‍🔧', '👨🏼‍🔧', '👨🏽‍🔧', '👨🏾‍🔧', '👨🏿‍🔧'],
            'version' => '4.0'
        ], [
            'emoji' => '👩‍🔧',
            'category' => 1,
            'name' => 'woman mechanic',
            'variations' => ['👩🏻‍🔧', '👩🏼‍🔧', '👩🏽‍🔧', '👩🏾‍🔧', '👩🏿‍🔧'],
            'version' => '4.0'
        ], [
            'emoji' => '🧑‍🏭',
            'category' => 1,
            'name' => 'factory worker',
            'variations' => ['🧑🏻‍🏭', '🧑🏼‍🏭', '🧑🏽‍🏭', '🧑🏾‍🏭', '🧑🏿‍🏭'],
            'version' => '12.1'
        ], [
            'emoji' => '👨‍🏭',
            'category' => 1,
            'name' => 'man factory worker',
            'variations' => ['👨🏻‍🏭', '👨🏼‍🏭', '👨🏽‍🏭', '👨🏾‍🏭', '👨🏿‍🏭'],
            'version' => '4.0'
        ], [
            'emoji' => '👩‍🏭',
            'category' => 1,
            'name' => 'woman factory worker',
            'variations' => ['👩🏻‍🏭', '👩🏼‍🏭', '👩🏽‍🏭', '👩🏾‍🏭', '👩🏿‍🏭'],
            'version' => '4.0'
        ], [
            'emoji' => '🧑‍💼',
            'category' => 1,
            'name' => 'office worker',
            'variations' => ['🧑🏻‍💼', '🧑🏼‍💼', '🧑🏽‍💼', '🧑🏾‍💼', '🧑🏿‍💼'],
            'version' => '12.1'
        ], [
            'emoji' => '👨‍💼',
            'category' => 1,
            'name' => 'man office worker',
            'variations' => ['👨🏻‍💼', '👨🏼‍💼', '👨🏽‍💼', '👨🏾‍💼', '👨🏿‍💼'],
            'version' => '4.0'
        ], [
            'emoji' => '👩‍💼',
            'category' => 1,
            'name' => 'woman office worker',
            'variations' => ['👩🏻‍💼', '👩🏼‍💼', '👩🏽‍💼', '👩🏾‍💼', '👩🏿‍💼'],
            'version' => '4.0'
        ], [
            'emoji' => '🧑‍🔬',
            'category' => 1,
            'name' => 'scientist',
            'variations' => ['🧑🏻‍🔬', '🧑🏼‍🔬', '🧑🏽‍🔬', '🧑🏾‍🔬', '🧑🏿‍🔬'],
            'version' => '12.1'
        ], [
            'emoji' => '👨‍🔬',
            'category' => 1,
            'name' => 'man scientist',
            'variations' => ['👨🏻‍🔬', '👨🏼‍🔬', '👨🏽‍🔬', '👨🏾‍🔬', '👨🏿‍🔬'],
            'version' => '4.0'
        ], [
            'emoji' => '👩‍🔬',
            'category' => 1,
            'name' => 'woman scientist',
            'variations' => ['👩🏻‍🔬', '👩🏼‍🔬', '👩🏽‍🔬', '👩🏾‍🔬', '👩🏿‍🔬'],
            'version' => '4.0'
        ], [
            'emoji' => '🧑‍💻',
            'category' => 1,
            'name' => 'technologist',
            'variations' => ['🧑🏻‍💻', '🧑🏼‍💻', '🧑🏽‍💻', '🧑🏾‍💻', '🧑🏿‍💻'],
            'version' => '12.1'
        ], [
            'emoji' => '👨‍💻',
            'category' => 1,
            'name' => 'man technologist',
            'variations' => ['👨🏻‍💻', '👨🏼‍💻', '👨🏽‍💻', '👨🏾‍💻', '👨🏿‍💻'],
            'version' => '4.0'
        ], [
            'emoji' => '👩‍💻',
            'category' => 1,
            'name' => 'woman technologist',
            'variations' => ['👩🏻‍💻', '👩🏼‍💻', '👩🏽‍💻', '👩🏾‍💻', '👩🏿‍💻'],
            'version' => '4.0'
        ], [
            'emoji' => '🧑‍🎤',
            'category' => 1,
            'name' => 'singer',
            'variations' => ['🧑🏻‍🎤', '🧑🏼‍🎤', '🧑🏽‍🎤', '🧑🏾‍🎤', '🧑🏿‍🎤'],
            'version' => '12.1'
        ], [
            'emoji' => '👨‍🎤',
            'category' => 1,
            'name' => 'man singer',
            'variations' => ['👨🏻‍🎤', '👨🏼‍🎤', '👨🏽‍🎤', '👨🏾‍🎤', '👨🏿‍🎤'],
            'version' => '4.0'
        ], [
            'emoji' => '👩‍🎤',
            'category' => 1,
            'name' => 'woman singer',
            'variations' => ['👩🏻‍🎤', '👩🏼‍🎤', '👩🏽‍🎤', '👩🏾‍🎤', '👩🏿‍🎤'],
            'version' => '4.0'
        ], [
            'emoji' => '🧑‍🎨',
            'category' => 1,
            'name' => 'artist',
            'variations' => ['🧑🏻‍🎨', '🧑🏼‍🎨', '🧑🏽‍🎨', '🧑🏾‍🎨', '🧑🏿‍🎨'],
            'version' => '12.1'
        ], [
            'emoji' => '👨‍🎨',
            'category' => 1,
            'name' => 'man artist',
            'variations' => ['👨🏻‍🎨', '👨🏼‍🎨', '👨🏽‍🎨', '👨🏾‍🎨', '👨🏿‍🎨'],
            'version' => '4.0'
        ], [
            'emoji' => '👩‍🎨',
            'category' => 1,
            'name' => 'woman artist',
            'variations' => ['👩🏻‍🎨', '👩🏼‍🎨', '👩🏽‍🎨', '👩🏾‍🎨', '👩🏿‍🎨'],
            'version' => '4.0'
        ], [
            'emoji' => '🧑‍✈️',
            'category' => 1,
            'name' => 'pilot',
            'variations' => ['🧑🏻‍✈️', '🧑🏼‍✈️', '🧑🏽‍✈️', '🧑🏾‍✈️', '🧑🏿‍✈️'],
            'version' => '12.1'
        ], [
            'emoji' => '👨‍✈️',
            'category' => 1,
            'name' => 'man pilot',
            'variations' => ['👨🏻‍✈️', '👨🏼‍✈️', '👨🏽‍✈️', '👨🏾‍✈️', '👨🏿‍✈️'],
            'version' => '4.0'
        ], [
            'emoji' => '👩‍✈️',
            'category' => 1,
            'name' => 'woman pilot',
            'variations' => ['👩🏻‍✈️', '👩🏼‍✈️', '👩🏽‍✈️', '👩🏾‍✈️', '👩🏿‍✈️'],
            'version' => '4.0'
        ], [
            'emoji' => '🧑‍🚀',
            'category' => 1,
            'name' => 'astronaut',
            'variations' => ['🧑🏻‍🚀', '🧑🏼‍🚀', '🧑🏽‍🚀', '🧑🏾‍🚀', '🧑🏿‍🚀'],
            'version' => '12.1'
        ], [
            'emoji' => '👨‍🚀',
            'category' => 1,
            'name' => 'man astronaut',
            'variations' => ['👨🏻‍🚀', '👨🏼‍🚀', '👨🏽‍🚀', '👨🏾‍🚀', '👨🏿‍🚀'],
            'version' => '4.0'
        ], [
            'emoji' => '👩‍🚀',
            'category' => 1,
            'name' => 'woman astronaut',
            'variations' => ['👩🏻‍🚀', '👩🏼‍🚀', '👩🏽‍🚀', '👩🏾‍🚀', '👩🏿‍🚀'],
            'version' => '4.0'
        ], [
            'emoji' => '🧑‍🚒',
            'category' => 1,
            'name' => 'firefighter',
            'variations' => ['🧑🏻‍🚒', '🧑🏼‍🚒', '🧑🏽‍🚒', '🧑🏾‍🚒', '🧑🏿‍🚒'],
            'version' => '12.1'
        ], [
            'emoji' => '👨‍🚒',
            'category' => 1,
            'name' => 'man firefighter',
            'variations' => ['👨🏻‍🚒', '👨🏼‍🚒', '👨🏽‍🚒', '👨🏾‍🚒', '👨🏿‍🚒'],
            'version' => '4.0'
        ], [
            'emoji' => '👩‍🚒',
            'category' => 1,
            'name' => 'woman firefighter',
            'variations' => ['👩🏻‍🚒', '👩🏼‍🚒', '👩🏽‍🚒', '👩🏾‍🚒', '👩🏿‍🚒'],
            'version' => '4.0'
        ], [
            'emoji' => '👮',
            'category' => 1,
            'name' => 'police officer',
            'variations' => ['👮🏻', '👮🏼', '👮🏽', '👮🏾', '👮🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '👮‍♂️',
            'category' => 1,
            'name' => 'man police officer',
            'variations' => ['👮🏻‍♂️', '👮🏼‍♂️', '👮🏽‍♂️', '👮🏾‍♂️', '👮🏿‍♂️'],
            'version' => '4.0'
        ], [
            'emoji' => '👮‍♀️',
            'category' => 1,
            'name' => 'woman police officer',
            'variations' => ['👮🏻‍♀️', '👮🏼‍♀️', '👮🏽‍♀️', '👮🏾‍♀️', '👮🏿‍♀️'],
            'version' => '4.0'
        ], [
            'emoji' => '🕵️',
            'category' => 1,
            'name' => 'detective',
            'variations' => ['🕵🏻', '🕵🏼', '🕵🏽', '🕵🏾', '🕵🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '🕵️‍♂️',
            'category' => 1,
            'name' => 'man detective',
            'variations' => ['🕵🏻‍♂️', '🕵🏼‍♂️', '🕵🏽‍♂️', '🕵🏾‍♂️', '🕵🏿‍♂️'],
            'version' => '4.0'
        ], [
            'emoji' => '🕵️‍♀️',
            'category' => 1,
            'name' => 'woman detective',
            'variations' => ['🕵🏻‍♀️', '🕵🏼‍♀️', '🕵🏽‍♀️', '🕵🏾‍♀️', '🕵🏿‍♀️'],
            'version' => '4.0'
        ], [
            'emoji' => '💂',
            'category' => 1,
            'name' => 'guard',
            'variations' => ['💂🏻', '💂🏼', '💂🏽', '💂🏾', '💂🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '💂‍♂️',
            'category' => 1,
            'name' => 'man guard',
            'variations' => ['💂🏻‍♂️', '💂🏼‍♂️', '💂🏽‍♂️', '💂🏾‍♂️', '💂🏿‍♂️'],
            'version' => '4.0'
        ], [
            'emoji' => '💂‍♀️',
            'category' => 1,
            'name' => 'woman guard',
            'variations' => ['💂🏻‍♀️', '💂🏼‍♀️', '💂🏽‍♀️', '💂🏾‍♀️', '💂🏿‍♀️'],
            'version' => '4.0'
        ], [
            'emoji' => '🥷',
            'category' => 1,
            'name' => 'ninja',
            'variations' => ['🥷🏻', '🥷🏼', '🥷🏽', '🥷🏾', '🥷🏿'],
            'version' => '13.0'
        ], [
            'emoji' => '👷',
            'category' => 1,
            'name' => 'construction worker',
            'variations' => ['👷🏻', '👷🏼', '👷🏽', '👷🏾', '👷🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '👷‍♂️',
            'category' => 1,
            'name' => 'man construction worker',
            'variations' => ['👷🏻‍♂️', '👷🏼‍♂️', '👷🏽‍♂️', '👷🏾‍♂️', '👷🏿‍♂️'],
            'version' => '4.0'
        ], [
            'emoji' => '👷‍♀️',
            'category' => 1,
            'name' => 'woman construction worker',
            'variations' => ['👷🏻‍♀️', '👷🏼‍♀️', '👷🏽‍♀️', '👷🏾‍♀️', '👷🏿‍♀️'],
            'version' => '4.0'
        ], [
            'emoji' => '🤴',
            'category' => 1,
            'name' => 'prince',
            'variations' => ['🤴🏻', '🤴🏼', '🤴🏽', '🤴🏾', '🤴🏿'],
            'version' => '3.0'
        ], [
            'emoji' => '👸',
            'category' => 1,
            'name' => 'princess',
            'variations' => ['👸🏻', '👸🏼', '👸🏽', '👸🏾', '👸🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '👳',
            'category' => 1,
            'name' => 'person wearing turban',
            'variations' => ['👳🏻', '👳🏼', '👳🏽', '👳🏾', '👳🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '👳‍♂️',
            'category' => 1,
            'name' => 'man wearing turban',
            'variations' => ['👳🏻‍♂️', '👳🏼‍♂️', '👳🏽‍♂️', '👳🏾‍♂️', '👳🏿‍♂️'],
            'version' => '4.0'
        ], [
            'emoji' => '👳‍♀️',
            'category' => 1,
            'name' => 'woman wearing turban',
            'variations' => ['👳🏻‍♀️', '👳🏼‍♀️', '👳🏽‍♀️', '👳🏾‍♀️', '👳🏿‍♀️'],
            'version' => '4.0'
        ], [
            'emoji' => '👲',
            'category' => 1,
            'name' => 'person with skullcap',
            'variations' => ['👲🏻', '👲🏼', '👲🏽', '👲🏾', '👲🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '🧕',
            'category' => 1,
            'name' => 'woman with headscarf',
            'variations' => ['🧕🏻', '🧕🏼', '🧕🏽', '🧕🏾', '🧕🏿'],
            'version' => '5.0'
        ], [
            'emoji' => '🤵',
            'category' => 1,
            'name' => 'person in tuxedo',
            'variations' => ['🤵🏻', '🤵🏼', '🤵🏽', '🤵🏾', '🤵🏿'],
            'version' => '3.0'
        ], [
            'emoji' => '🤵‍♂️',
            'category' => 1,
            'name' => 'man in tuxedo',
            'variations' => ['🤵🏻‍♂️', '🤵🏼‍♂️', '🤵🏽‍♂️', '🤵🏾‍♂️', '🤵🏿‍♂️'],
            'version' => '13.0'
        ], [
            'emoji' => '🤵‍♀️',
            'category' => 1,
            'name' => 'woman in tuxedo',
            'variations' => ['🤵🏻‍♀️', '🤵🏼‍♀️', '🤵🏽‍♀️', '🤵🏾‍♀️', '🤵🏿‍♀️'],
            'version' => '13.0'
        ], [
            'emoji' => '👰',
            'category' => 1,
            'name' => 'person with veil',
            'variations' => ['👰🏻', '👰🏼', '👰🏽', '👰🏾', '👰🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '👰‍♂️',
            'category' => 1,
            'name' => 'man with veil',
            'variations' => ['👰🏻‍♂️', '👰🏼‍♂️', '👰🏽‍♂️', '👰🏾‍♂️', '👰🏿‍♂️'],
            'version' => '13.0'
        ], [
            'emoji' => '👰‍♀️',
            'category' => 1,
            'name' => 'woman with veil',
            'variations' => ['👰🏻‍♀️', '👰🏼‍♀️', '👰🏽‍♀️', '👰🏾‍♀️', '👰🏿‍♀️'],
            'version' => '13.0'
        ], [
            'emoji' => '🤰',
            'category' => 1,
            'name' => 'pregnant woman',
            'variations' => ['🤰🏻', '🤰🏼', '🤰🏽', '🤰🏾', '🤰🏿'],
            'version' => '3.0'
        ], [
            'emoji' => '🤱',
            'category' => 1,
            'name' => 'breast-feeding',
            'variations' => ['🤱🏻', '🤱🏼', '🤱🏽', '🤱🏾', '🤱🏿'],
            'version' => '5.0'
        ], [
            'emoji' => '👩‍🍼',
            'category' => 1,
            'name' => 'woman feeding baby',
            'variations' => ['👩🏻‍🍼', '👩🏼‍🍼', '👩🏽‍🍼', '👩🏾‍🍼', '👩🏿‍🍼'],
            'version' => '13.0'
        ], [
            'emoji' => '👨‍🍼',
            'category' => 1,
            'name' => 'man feeding baby',
            'variations' => ['👨🏻‍🍼', '👨🏼‍🍼', '👨🏽‍🍼', '👨🏾‍🍼', '👨🏿‍🍼'],
            'version' => '13.0'
        ], [
            'emoji' => '🧑‍🍼',
            'category' => 1,
            'name' => 'person feeding baby',
            'variations' => ['🧑🏻‍🍼', '🧑🏼‍🍼', '🧑🏽‍🍼', '🧑🏾‍🍼', '🧑🏿‍🍼'],
            'version' => '13.0'
        ], [
            'emoji' => '👼',
            'category' => 1,
            'name' => 'baby angel',
            'variations' => ['👼🏻', '👼🏼', '👼🏽', '👼🏾', '👼🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '🎅',
            'category' => 1,
            'name' => 'Santa Claus',
            'variations' => ['🎅🏻', '🎅🏼', '🎅🏽', '🎅🏾', '🎅🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '🤶',
            'category' => 1,
            'name' => 'Mrs. Claus',
            'variations' => ['🤶🏻', '🤶🏼', '🤶🏽', '🤶🏾', '🤶🏿'],
            'version' => '3.0'
        ], [
            'emoji' => '🧑‍🎄',
            'category' => 1,
            'name' => 'mx claus',
            'variations' => ['🧑🏻‍🎄', '🧑🏼‍🎄', '🧑🏽‍🎄', '🧑🏾‍🎄', '🧑🏿‍🎄'],
            'version' => '13.0'
        ], [
            'emoji' => '🦸',
            'category' => 1,
            'name' => 'superhero',
            'variations' => ['🦸🏻', '🦸🏼', '🦸🏽', '🦸🏾', '🦸🏿'],
            'version' => '11.0'
        ], [
            'emoji' => '🦸‍♂️',
            'category' => 1,
            'name' => 'man superhero',
            'variations' => ['🦸🏻‍♂️', '🦸🏼‍♂️', '🦸🏽‍♂️', '🦸🏾‍♂️', '🦸🏿‍♂️'],
            'version' => '11.0'
        ], [
            'emoji' => '🦸‍♀️',
            'category' => 1,
            'name' => 'woman superhero',
            'variations' => ['🦸🏻‍♀️', '🦸🏼‍♀️', '🦸🏽‍♀️', '🦸🏾‍♀️', '🦸🏿‍♀️'],
            'version' => '11.0'
        ], [
            'emoji' => '🦹',
            'category' => 1,
            'name' => 'supervillain',
            'variations' => ['🦹🏻', '🦹🏼', '🦹🏽', '🦹🏾', '🦹🏿'],
            'version' => '11.0'
        ], [
            'emoji' => '🦹‍♂️',
            'category' => 1,
            'name' => 'man supervillain',
            'variations' => ['🦹🏻‍♂️', '🦹🏼‍♂️', '🦹🏽‍♂️', '🦹🏾‍♂️', '🦹🏿‍♂️'],
            'version' => '11.0'
        ], [
            'emoji' => '🦹‍♀️',
            'category' => 1,
            'name' => 'woman supervillain',
            'variations' => ['🦹🏻‍♀️', '🦹🏼‍♀️', '🦹🏽‍♀️', '🦹🏾‍♀️', '🦹🏿‍♀️'],
            'version' => '11.0'
        ], [
            'emoji' => '🧙',
            'category' => 1,
            'name' => 'mage',
            'variations' => ['🧙🏻', '🧙🏼', '🧙🏽', '🧙🏾', '🧙🏿'],
            'version' => '5.0'
        ], [
            'emoji' => '🧙‍♂️',
            'category' => 1,
            'name' => 'man mage',
            'variations' => ['🧙🏻‍♂️', '🧙🏼‍♂️', '🧙🏽‍♂️', '🧙🏾‍♂️', '🧙🏿‍♂️'],
            'version' => '5.0'
        ], [
            'emoji' => '🧙‍♀️',
            'category' => 1,
            'name' => 'woman mage',
            'variations' => ['🧙🏻‍♀️', '🧙🏼‍♀️', '🧙🏽‍♀️', '🧙🏾‍♀️', '🧙🏿‍♀️'],
            'version' => '5.0'
        ], [
            'emoji' => '🧚',
            'category' => 1,
            'name' => 'fairy',
            'variations' => ['🧚🏻', '🧚🏼', '🧚🏽', '🧚🏾', '🧚🏿'],
            'version' => '5.0'
        ], [
            'emoji' => '🧚‍♂️',
            'category' => 1,
            'name' => 'man fairy',
            'variations' => ['🧚🏻‍♂️', '🧚🏼‍♂️', '🧚🏽‍♂️', '🧚🏾‍♂️', '🧚🏿‍♂️'],
            'version' => '5.0'
        ], [
            'emoji' => '🧚‍♀️',
            'category' => 1,
            'name' => 'woman fairy',
            'variations' => ['🧚🏻‍♀️', '🧚🏼‍♀️', '🧚🏽‍♀️', '🧚🏾‍♀️', '🧚🏿‍♀️'],
            'version' => '5.0'
        ], [
            'emoji' => '🧛',
            'category' => 1,
            'name' => 'vampire',
            'variations' => ['🧛🏻', '🧛🏼', '🧛🏽', '🧛🏾', '🧛🏿'],
            'version' => '5.0'
        ], [
            'emoji' => '🧛‍♂️',
            'category' => 1,
            'name' => 'man vampire',
            'variations' => ['🧛🏻‍♂️', '🧛🏼‍♂️', '🧛🏽‍♂️', '🧛🏾‍♂️', '🧛🏿‍♂️'],
            'version' => '5.0'
        ], [
            'emoji' => '🧛‍♀️',
            'category' => 1,
            'name' => 'woman vampire',
            'variations' => ['🧛🏻‍♀️', '🧛🏼‍♀️', '🧛🏽‍♀️', '🧛🏾‍♀️', '🧛🏿‍♀️'],
            'version' => '5.0'
        ], [
            'emoji' => '🧜',
            'category' => 1,
            'name' => 'merperson',
            'variations' => ['🧜🏻', '🧜🏼', '🧜🏽', '🧜🏾', '🧜🏿'],
            'version' => '5.0'
        ], [
            'emoji' => '🧜‍♂️',
            'category' => 1,
            'name' => 'merman',
            'variations' => ['🧜🏻‍♂️', '🧜🏼‍♂️', '🧜🏽‍♂️', '🧜🏾‍♂️', '🧜🏿‍♂️'],
            'version' => '5.0'
        ], [
            'emoji' => '🧜‍♀️',
            'category' => 1,
            'name' => 'mermaid',
            'variations' => ['🧜🏻‍♀️', '🧜🏼‍♀️', '🧜🏽‍♀️', '🧜🏾‍♀️', '🧜🏿‍♀️'],
            'version' => '5.0'
        ], [
            'emoji' => '🧝',
            'category' => 1,
            'name' => 'elf',
            'variations' => ['🧝🏻', '🧝🏼', '🧝🏽', '🧝🏾', '🧝🏿'],
            'version' => '5.0'
        ], [
            'emoji' => '🧝‍♂️',
            'category' => 1,
            'name' => 'man elf',
            'variations' => ['🧝🏻‍♂️', '🧝🏼‍♂️', '🧝🏽‍♂️', '🧝🏾‍♂️', '🧝🏿‍♂️'],
            'version' => '5.0'
        ], [
            'emoji' => '🧝‍♀️',
            'category' => 1,
            'name' => 'woman elf',
            'variations' => ['🧝🏻‍♀️', '🧝🏼‍♀️', '🧝🏽‍♀️', '🧝🏾‍♀️', '🧝🏿‍♀️'],
            'version' => '5.0'
        ], [
            'emoji' => '🧞',
            'category' => 1,
            'name' => 'genie',
            'version' => '5.0'
        ], [
            'emoji' => '🧞‍♂️',
            'category' => 1,
            'name' => 'man genie',
            'version' => '5.0'
        ], [
            'emoji' => '🧞‍♀️',
            'category' => 1,
            'name' => 'woman genie',
            'version' => '5.0'
        ], [
            'emoji' => '🧟',
            'category' => 1,
            'name' => 'zombie',
            'version' => '5.0'
        ], [
            'emoji' => '🧟‍♂️',
            'category' => 1,
            'name' => 'man zombie',
            'version' => '5.0'
        ], [
            'emoji' => '🧟‍♀️',
            'category' => 1,
            'name' => 'woman zombie',
            'version' => '5.0'
        ], [
            'emoji' => '💆',
            'category' => 1,
            'name' => 'person getting massage',
            'variations' => ['💆🏻', '💆🏼', '💆🏽', '💆🏾', '💆🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '💆‍♂️',
            'category' => 1,
            'name' => 'man getting massage',
            'variations' => ['💆🏻‍♂️', '💆🏼‍♂️', '💆🏽‍♂️', '💆🏾‍♂️', '💆🏿‍♂️'],
            'version' => '4.0'
        ], [
            'emoji' => '💆‍♀️',
            'category' => 1,
            'name' => 'woman getting massage',
            'variations' => ['💆🏻‍♀️', '💆🏼‍♀️', '💆🏽‍♀️', '💆🏾‍♀️', '💆🏿‍♀️'],
            'version' => '4.0'
        ], [
            'emoji' => '💇',
            'category' => 1,
            'name' => 'person getting haircut',
            'variations' => ['💇🏻', '💇🏼', '💇🏽', '💇🏾', '💇🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '💇‍♂️',
            'category' => 1,
            'name' => 'man getting haircut',
            'variations' => ['💇🏻‍♂️', '💇🏼‍♂️', '💇🏽‍♂️', '💇🏾‍♂️', '💇🏿‍♂️'],
            'version' => '4.0'
        ], [
            'emoji' => '💇‍♀️',
            'category' => 1,
            'name' => 'woman getting haircut',
            'variations' => ['💇🏻‍♀️', '💇🏼‍♀️', '💇🏽‍♀️', '💇🏾‍♀️', '💇🏿‍♀️'],
            'version' => '4.0'
        ], [
            'emoji' => '🚶',
            'category' => 1,
            'name' => 'person walking',
            'variations' => ['🚶🏻', '🚶🏼', '🚶🏽', '🚶🏾', '🚶🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '🚶‍♂️',
            'category' => 1,
            'name' => 'man walking',
            'variations' => ['🚶🏻‍♂️', '🚶🏼‍♂️', '🚶🏽‍♂️', '🚶🏾‍♂️', '🚶🏿‍♂️'],
            'version' => '4.0'
        ], [
            'emoji' => '🚶‍♀️',
            'category' => 1,
            'name' => 'woman walking',
            'variations' => ['🚶🏻‍♀️', '🚶🏼‍♀️', '🚶🏽‍♀️', '🚶🏾‍♀️', '🚶🏿‍♀️'],
            'version' => '4.0'
        ], [
            'emoji' => '🧍',
            'category' => 1,
            'name' => 'person standing',
            'variations' => ['🧍🏻', '🧍🏼', '🧍🏽', '🧍🏾', '🧍🏿'],
            'version' => '12.0'
        ], [
            'emoji' => '🧍‍♂️',
            'category' => 1,
            'name' => 'man standing',
            'variations' => ['🧍🏻‍♂️', '🧍🏼‍♂️', '🧍🏽‍♂️', '🧍🏾‍♂️', '🧍🏿‍♂️'],
            'version' => '12.0'
        ], [
            'emoji' => '🧍‍♀️',
            'category' => 1,
            'name' => 'woman standing',
            'variations' => ['🧍🏻‍♀️', '🧍🏼‍♀️', '🧍🏽‍♀️', '🧍🏾‍♀️', '🧍🏿‍♀️'],
            'version' => '12.0'
        ], [
            'emoji' => '🧎',
            'category' => 1,
            'name' => 'person kneeling',
            'variations' => ['🧎🏻', '🧎🏼', '🧎🏽', '🧎🏾', '🧎🏿'],
            'version' => '12.0'
        ], [
            'emoji' => '🧎‍♂️',
            'category' => 1,
            'name' => 'man kneeling',
            'variations' => ['🧎🏻‍♂️', '🧎🏼‍♂️', '🧎🏽‍♂️', '🧎🏾‍♂️', '🧎🏿‍♂️'],
            'version' => '12.0'
        ], [
            'emoji' => '🧎‍♀️',
            'category' => 1,
            'name' => 'woman kneeling',
            'variations' => ['🧎🏻‍♀️', '🧎🏼‍♀️', '🧎🏽‍♀️', '🧎🏾‍♀️', '🧎🏿‍♀️'],
            'version' => '12.0'
        ], [
            'emoji' => '🧑‍🦯',
            'category' => 1,
            'name' => 'person with white cane',
            'variations' => ['🧑🏻‍🦯', '🧑🏼‍🦯', '🧑🏽‍🦯', '🧑🏾‍🦯', '🧑🏿‍🦯'],
            'version' => '12.1'
        ], [
            'emoji' => '👨‍🦯',
            'category' => 1,
            'name' => 'man with white cane',
            'variations' => ['👨🏻‍🦯', '👨🏼‍🦯', '👨🏽‍🦯', '👨🏾‍🦯', '👨🏿‍🦯'],
            'version' => '12.0'
        ], [
            'emoji' => '👩‍🦯',
            'category' => 1,
            'name' => 'woman with white cane',
            'variations' => ['👩🏻‍🦯', '👩🏼‍🦯', '👩🏽‍🦯', '👩🏾‍🦯', '👩🏿‍🦯'],
            'version' => '12.0'
        ], [
            'emoji' => '🧑‍🦼',
            'category' => 1,
            'name' => 'person in motorized wheelchair',
            'variations' => ['🧑🏻‍🦼', '🧑🏼‍🦼', '🧑🏽‍🦼', '🧑🏾‍🦼', '🧑🏿‍🦼'],
            'version' => '12.1'
        ], [
            'emoji' => '👨‍🦼',
            'category' => 1,
            'name' => 'man in motorized wheelchair',
            'variations' => ['👨🏻‍🦼', '👨🏼‍🦼', '👨🏽‍🦼', '👨🏾‍🦼', '👨🏿‍🦼'],
            'version' => '12.0'
        ], [
            'emoji' => '👩‍🦼',
            'category' => 1,
            'name' => 'woman in motorized wheelchair',
            'variations' => ['👩🏻‍🦼', '👩🏼‍🦼', '👩🏽‍🦼', '👩🏾‍🦼', '👩🏿‍🦼'],
            'version' => '12.0'
        ], [
            'emoji' => '🧑‍🦽',
            'category' => 1,
            'name' => 'person in manual wheelchair',
            'variations' => ['🧑🏻‍🦽', '🧑🏼‍🦽', '🧑🏽‍🦽', '🧑🏾‍🦽', '🧑🏿‍🦽'],
            'version' => '12.1'
        ], [
            'emoji' => '👨‍🦽',
            'category' => 1,
            'name' => 'man in manual wheelchair',
            'variations' => ['👨🏻‍🦽', '👨🏼‍🦽', '👨🏽‍🦽', '👨🏾‍🦽', '👨🏿‍🦽'],
            'version' => '12.0'
        ], [
            'emoji' => '👩‍🦽',
            'category' => 1,
            'name' => 'woman in manual wheelchair',
            'variations' => ['👩🏻‍🦽', '👩🏼‍🦽', '👩🏽‍🦽', '👩🏾‍🦽', '👩🏿‍🦽'],
            'version' => '12.0'
        ], [
            'emoji' => '🏃',
            'category' => 1,
            'name' => 'person running',
            'variations' => ['🏃🏻', '🏃🏼', '🏃🏽', '🏃🏾', '🏃🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '🏃‍♂️',
            'category' => 1,
            'name' => 'man running',
            'variations' => ['🏃🏻‍♂️', '🏃🏼‍♂️', '🏃🏽‍♂️', '🏃🏾‍♂️', '🏃🏿‍♂️'],
            'version' => '4.0'
        ], [
            'emoji' => '🏃‍♀️',
            'category' => 1,
            'name' => 'woman running',
            'variations' => ['🏃🏻‍♀️', '🏃🏼‍♀️', '🏃🏽‍♀️', '🏃🏾‍♀️', '🏃🏿‍♀️'],
            'version' => '4.0'
        ], [
            'emoji' => '💃',
            'category' => 1,
            'name' => 'woman dancing',
            'variations' => ['💃🏻', '💃🏼', '💃🏽', '💃🏾', '💃🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '🕺',
            'category' => 1,
            'name' => 'man dancing',
            'variations' => ['🕺🏻', '🕺🏼', '🕺🏽', '🕺🏾', '🕺🏿'],
            'version' => '3.0'
        ], [
            'emoji' => '🕴️',
            'category' => 1,
            'name' => 'person in suit levitating',
            'variations' => ['🕴🏻', '🕴🏼', '🕴🏽', '🕴🏾', '🕴🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '👯',
            'category' => 1,
            'name' => 'people with bunny ears',
            'version' => '1.0'
        ], [
            'emoji' => '👯‍♂️',
            'category' => 1,
            'name' => 'men with bunny ears',
            'version' => '4.0'
        ], [
            'emoji' => '👯‍♀️',
            'category' => 1,
            'name' => 'women with bunny ears',
            'version' => '4.0'
        ], [
            'emoji' => '🧖',
            'category' => 1,
            'name' => 'person in steamy room',
            'variations' => ['🧖🏻', '🧖🏼', '🧖🏽', '🧖🏾', '🧖🏿'],
            'version' => '5.0'
        ], [
            'emoji' => '🧖‍♂️',
            'category' => 1,
            'name' => 'man in steamy room',
            'variations' => ['🧖🏻‍♂️', '🧖🏼‍♂️', '🧖🏽‍♂️', '🧖🏾‍♂️', '🧖🏿‍♂️'],
            'version' => '5.0'
        ], [
            'emoji' => '🧖‍♀️',
            'category' => 1,
            'name' => 'woman in steamy room',
            'variations' => ['🧖🏻‍♀️', '🧖🏼‍♀️', '🧖🏽‍♀️', '🧖🏾‍♀️', '🧖🏿‍♀️'],
            'version' => '5.0'
        ], [
            'emoji' => '🧗',
            'category' => 1,
            'name' => 'person climbing',
            'variations' => ['🧗🏻', '🧗🏼', '🧗🏽', '🧗🏾', '🧗🏿'],
            'version' => '5.0'
        ], [
            'emoji' => '🧗‍♂️',
            'category' => 1,
            'name' => 'man climbing',
            'variations' => ['🧗🏻‍♂️', '🧗🏼‍♂️', '🧗🏽‍♂️', '🧗🏾‍♂️', '🧗🏿‍♂️'],
            'version' => '5.0'
        ], [
            'emoji' => '🧗‍♀️',
            'category' => 1,
            'name' => 'woman climbing',
            'variations' => ['🧗🏻‍♀️', '🧗🏼‍♀️', '🧗🏽‍♀️', '🧗🏾‍♀️', '🧗🏿‍♀️'],
            'version' => '5.0'
        ], [
            'emoji' => '🤺',
            'category' => 1,
            'name' => 'person fencing',
            'version' => '3.0'
        ], [
            'emoji' => '🏇',
            'category' => 1,
            'name' => 'horse racing',
            'variations' => ['🏇🏻', '🏇🏼', '🏇🏽', '🏇🏾', '🏇🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '⛷️',
            'category' => 1,
            'name' => 'skier',
            'version' => '1.0'
        ], [
            'emoji' => '🏂',
            'category' => 1,
            'name' => 'snowboarder',
            'variations' => ['🏂🏻', '🏂🏼', '🏂🏽', '🏂🏾', '🏂🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '🏌️',
            'category' => 1,
            'name' => 'person golfing',
            'variations' => ['🏌🏻', '🏌🏼', '🏌🏽', '🏌🏾', '🏌🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '🏌️‍♂️',
            'category' => 1,
            'name' => 'man golfing',
            'variations' => ['🏌🏻‍♂️', '🏌🏼‍♂️', '🏌🏽‍♂️', '🏌🏾‍♂️', '🏌🏿‍♂️'],
            'version' => '4.0'
        ], [
            'emoji' => '🏌️‍♀️',
            'category' => 1,
            'name' => 'woman golfing',
            'variations' => ['🏌🏻‍♀️', '🏌🏼‍♀️', '🏌🏽‍♀️', '🏌🏾‍♀️', '🏌🏿‍♀️'],
            'version' => '4.0'
        ], [
            'emoji' => '🏄',
            'category' => 1,
            'name' => 'person surfing',
            'variations' => ['🏄🏻', '🏄🏼', '🏄🏽', '🏄🏾', '🏄🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '🏄‍♂️',
            'category' => 1,
            'name' => 'man surfing',
            'variations' => ['🏄🏻‍♂️', '🏄🏼‍♂️', '🏄🏽‍♂️', '🏄🏾‍♂️', '🏄🏿‍♂️'],
            'version' => '4.0'
        ], [
            'emoji' => '🏄‍♀️',
            'category' => 1,
            'name' => 'woman surfing',
            'variations' => ['🏄🏻‍♀️', '🏄🏼‍♀️', '🏄🏽‍♀️', '🏄🏾‍♀️', '🏄🏿‍♀️'],
            'version' => '4.0'
        ], [
            'emoji' => '🚣',
            'category' => 1,
            'name' => 'person rowing boat',
            'variations' => ['🚣🏻', '🚣🏼', '🚣🏽', '🚣🏾', '🚣🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '🚣‍♂️',
            'category' => 1,
            'name' => 'man rowing boat',
            'variations' => ['🚣🏻‍♂️', '🚣🏼‍♂️', '🚣🏽‍♂️', '🚣🏾‍♂️', '🚣🏿‍♂️'],
            'version' => '4.0'
        ], [
            'emoji' => '🚣‍♀️',
            'category' => 1,
            'name' => 'woman rowing boat',
            'variations' => ['🚣🏻‍♀️', '🚣🏼‍♀️', '🚣🏽‍♀️', '🚣🏾‍♀️', '🚣🏿‍♀️'],
            'version' => '4.0'
        ], [
            'emoji' => '🏊',
            'category' => 1,
            'name' => 'person swimming',
            'variations' => ['🏊🏻', '🏊🏼', '🏊🏽', '🏊🏾', '🏊🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '🏊‍♂️',
            'category' => 1,
            'name' => 'man swimming',
            'variations' => ['🏊🏻‍♂️', '🏊🏼‍♂️', '🏊🏽‍♂️', '🏊🏾‍♂️', '🏊🏿‍♂️'],
            'version' => '4.0'
        ], [
            'emoji' => '🏊‍♀️',
            'category' => 1,
            'name' => 'woman swimming',
            'variations' => ['🏊🏻‍♀️', '🏊🏼‍♀️', '🏊🏽‍♀️', '🏊🏾‍♀️', '🏊🏿‍♀️'],
            'version' => '4.0'
        ], [
            'emoji' => '⛹️',
            'category' => 1,
            'name' => 'person bouncing ball',
            'variations' => ['⛹🏻', '⛹🏼', '⛹🏽', '⛹🏾', '⛹🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '⛹️‍♂️',
            'category' => 1,
            'name' => 'man bouncing ball',
            'variations' => ['⛹🏻‍♂️', '⛹🏼‍♂️', '⛹🏽‍♂️', '⛹🏾‍♂️', '⛹🏿‍♂️'],
            'version' => '4.0'
        ], [
            'emoji' => '⛹️‍♀️',
            'category' => 1,
            'name' => 'woman bouncing ball',
            'variations' => ['⛹🏻‍♀️', '⛹🏼‍♀️', '⛹🏽‍♀️', '⛹🏾‍♀️', '⛹🏿‍♀️'],
            'version' => '4.0'
        ], [
            'emoji' => '🏋️',
            'category' => 1,
            'name' => 'person lifting weights',
            'variations' => ['🏋🏻', '🏋🏼', '🏋🏽', '🏋🏾', '🏋🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '🏋️‍♂️',
            'category' => 1,
            'name' => 'man lifting weights',
            'variations' => ['🏋🏻‍♂️', '🏋🏼‍♂️', '🏋🏽‍♂️', '🏋🏾‍♂️', '🏋🏿‍♂️'],
            'version' => '4.0'
        ], [
            'emoji' => '🏋️‍♀️',
            'category' => 1,
            'name' => 'woman lifting weights',
            'variations' => ['🏋🏻‍♀️', '🏋🏼‍♀️', '🏋🏽‍♀️', '🏋🏾‍♀️', '🏋🏿‍♀️'],
            'version' => '4.0'
        ], [
            'emoji' => '🚴',
            'category' => 1,
            'name' => 'person biking',
            'variations' => ['🚴🏻', '🚴🏼', '🚴🏽', '🚴🏾', '🚴🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '🚴‍♂️',
            'category' => 1,
            'name' => 'man biking',
            'variations' => ['🚴🏻‍♂️', '🚴🏼‍♂️', '🚴🏽‍♂️', '🚴🏾‍♂️', '🚴🏿‍♂️'],
            'version' => '4.0'
        ], [
            'emoji' => '🚴‍♀️',
            'category' => 1,
            'name' => 'woman biking',
            'variations' => ['🚴🏻‍♀️', '🚴🏼‍♀️', '🚴🏽‍♀️', '🚴🏾‍♀️', '🚴🏿‍♀️'],
            'version' => '4.0'
        ], [
            'emoji' => '🚵',
            'category' => 1,
            'name' => 'person mountain biking',
            'variations' => ['🚵🏻', '🚵🏼', '🚵🏽', '🚵🏾', '🚵🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '🚵‍♂️',
            'category' => 1,
            'name' => 'man mountain biking',
            'variations' => ['🚵🏻‍♂️', '🚵🏼‍♂️', '🚵🏽‍♂️', '🚵🏾‍♂️', '🚵🏿‍♂️'],
            'version' => '4.0'
        ], [
            'emoji' => '🚵‍♀️',
            'category' => 1,
            'name' => 'woman mountain biking',
            'variations' => ['🚵🏻‍♀️', '🚵🏼‍♀️', '🚵🏽‍♀️', '🚵🏾‍♀️', '🚵🏿‍♀️'],
            'version' => '4.0'
        ], [
            'emoji' => '🤸',
            'category' => 1,
            'name' => 'person cartwheeling',
            'variations' => ['🤸🏻', '🤸🏼', '🤸🏽', '🤸🏾', '🤸🏿'],
            'version' => '3.0'
        ], [
            'emoji' => '🤸‍♂️',
            'category' => 1,
            'name' => 'man cartwheeling',
            'variations' => ['🤸🏻‍♂️', '🤸🏼‍♂️', '🤸🏽‍♂️', '🤸🏾‍♂️', '🤸🏿‍♂️'],
            'version' => '4.0'
        ], [
            'emoji' => '🤸‍♀️',
            'category' => 1,
            'name' => 'woman cartwheeling',
            'variations' => ['🤸🏻‍♀️', '🤸🏼‍♀️', '🤸🏽‍♀️', '🤸🏾‍♀️', '🤸🏿‍♀️'],
            'version' => '4.0'
        ], [
            'emoji' => '🤼',
            'category' => 1,
            'name' => 'people wrestling',
            'version' => '3.0'
        ], [
            'emoji' => '🤼‍♂️',
            'category' => 1,
            'name' => 'men wrestling',
            'version' => '4.0'
        ], [
            'emoji' => '🤼‍♀️',
            'category' => 1,
            'name' => 'women wrestling',
            'version' => '4.0'
        ], [
            'emoji' => '🤽',
            'category' => 1,
            'name' => 'person playing water polo',
            'variations' => ['🤽🏻', '🤽🏼', '🤽🏽', '🤽🏾', '🤽🏿'],
            'version' => '3.0'
        ], [
            'emoji' => '🤽‍♂️',
            'category' => 1,
            'name' => 'man playing water polo',
            'variations' => ['🤽🏻‍♂️', '🤽🏼‍♂️', '🤽🏽‍♂️', '🤽🏾‍♂️', '🤽🏿‍♂️'],
            'version' => '4.0'
        ], [
            'emoji' => '🤽‍♀️',
            'category' => 1,
            'name' => 'woman playing water polo',
            'variations' => ['🤽🏻‍♀️', '🤽🏼‍♀️', '🤽🏽‍♀️', '🤽🏾‍♀️', '🤽🏿‍♀️'],
            'version' => '4.0'
        ], [
            'emoji' => '🤾',
            'category' => 1,
            'name' => 'person playing handball',
            'variations' => ['🤾🏻', '🤾🏼', '🤾🏽', '🤾🏾', '🤾🏿'],
            'version' => '3.0'
        ], [
            'emoji' => '🤾‍♂️',
            'category' => 1,
            'name' => 'man playing handball',
            'variations' => ['🤾🏻‍♂️', '🤾🏼‍♂️', '🤾🏽‍♂️', '🤾🏾‍♂️', '🤾🏿‍♂️'],
            'version' => '4.0'
        ], [
            'emoji' => '🤾‍♀️',
            'category' => 1,
            'name' => 'woman playing handball',
            'variations' => ['🤾🏻‍♀️', '🤾🏼‍♀️', '🤾🏽‍♀️', '🤾🏾‍♀️', '🤾🏿‍♀️'],
            'version' => '4.0'
        ], [
            'emoji' => '🤹',
            'category' => 1,
            'name' => 'person juggling',
            'variations' => ['🤹🏻', '🤹🏼', '🤹🏽', '🤹🏾', '🤹🏿'],
            'version' => '3.0'
        ], [
            'emoji' => '🤹‍♂️',
            'category' => 1,
            'name' => 'man juggling',
            'variations' => ['🤹🏻‍♂️', '🤹🏼‍♂️', '🤹🏽‍♂️', '🤹🏾‍♂️', '🤹🏿‍♂️'],
            'version' => '4.0'
        ], [
            'emoji' => '🤹‍♀️',
            'category' => 1,
            'name' => 'woman juggling',
            'variations' => ['🤹🏻‍♀️', '🤹🏼‍♀️', '🤹🏽‍♀️', '🤹🏾‍♀️', '🤹🏿‍♀️'],
            'version' => '4.0'
        ], [
            'emoji' => '🧘',
            'category' => 1,
            'name' => 'person in lotus position',
            'variations' => ['🧘🏻', '🧘🏼', '🧘🏽', '🧘🏾', '🧘🏿'],
            'version' => '5.0'
        ], [
            'emoji' => '🧘‍♂️',
            'category' => 1,
            'name' => 'man in lotus position',
            'variations' => ['🧘🏻‍♂️', '🧘🏼‍♂️', '🧘🏽‍♂️', '🧘🏾‍♂️', '🧘🏿‍♂️'],
            'version' => '5.0'
        ], [
            'emoji' => '🧘‍♀️',
            'category' => 1,
            'name' => 'woman in lotus position',
            'variations' => ['🧘🏻‍♀️', '🧘🏼‍♀️', '🧘🏽‍♀️', '🧘🏾‍♀️', '🧘🏿‍♀️'],
            'version' => '5.0'
        ], [
            'emoji' => '🛀',
            'category' => 1,
            'name' => 'person taking bath',
            'variations' => ['🛀🏻', '🛀🏼', '🛀🏽', '🛀🏾', '🛀🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '🛌',
            'category' => 1,
            'name' => 'person in bed',
            'variations' => ['🛌🏻', '🛌🏼', '🛌🏽', '🛌🏾', '🛌🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '🧑‍🤝‍🧑',
            'category' => 1,
            'name' => 'people holding hands',
            'variations' => ['🧑🏻‍🤝‍🧑🏻', '🧑🏻‍🤝‍🧑🏼', '🧑🏻‍🤝‍🧑🏽', '🧑🏻‍🤝‍🧑🏾', '🧑🏻‍🤝‍🧑🏿', '🧑🏼‍🤝‍🧑🏻', '🧑🏼‍🤝‍🧑🏼', '🧑🏼‍🤝‍🧑🏽', '🧑🏼‍🤝‍🧑🏾', '🧑🏼‍🤝‍🧑🏿', '🧑🏽‍🤝‍🧑🏻', '🧑🏽‍🤝‍🧑🏼', '🧑🏽‍🤝‍🧑🏽', '🧑🏽‍🤝‍🧑🏾', '🧑🏽‍🤝‍🧑🏿', '🧑🏾‍🤝‍🧑🏻', '🧑🏾‍🤝‍🧑🏼', '🧑🏾‍🤝‍🧑🏽', '🧑🏾‍🤝‍🧑🏾', '🧑🏾‍🤝‍🧑🏿', '🧑🏿‍🤝‍🧑🏻', '🧑🏿‍🤝‍🧑🏼', '🧑🏿‍🤝‍🧑🏽', '🧑🏿‍🤝‍🧑🏾', '🧑🏿‍🤝‍🧑🏿'],
            'version' => '12.0'
        ], [
            'emoji' => '👭',
            'category' => 1,
            'name' => 'women holding hands',
            'variations' => ['👭🏻', '👩🏻‍🤝‍👩🏼', '👩🏻‍🤝‍👩🏽', '👩🏻‍🤝‍👩🏾', '👩🏻‍🤝‍👩🏿', '👩🏼‍🤝‍👩🏻', '👭🏼', '👩🏼‍🤝‍👩🏽', '👩🏼‍🤝‍👩🏾', '👩🏼‍🤝‍👩🏿', '👩🏽‍🤝‍👩🏻', '👩🏽‍🤝‍👩🏼', '👭🏽', '👩🏽‍🤝‍👩🏾', '👩🏽‍🤝‍👩🏿', '👩🏾‍🤝‍👩🏻', '👩🏾‍🤝‍👩🏼', '👩🏾‍🤝‍👩🏽', '👭🏾', '👩🏾‍🤝‍👩🏿', '👩🏿‍🤝‍👩🏻', '👩🏿‍🤝‍👩🏼', '👩🏿‍🤝‍👩🏽', '👩🏿‍🤝‍👩🏾', '👭🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '👫',
            'category' => 1,
            'name' => 'woman and man holding hands',
            'variations' => ['👫🏻', '👩🏻‍🤝‍👨🏼', '👩🏻‍🤝‍👨🏽', '👩🏻‍🤝‍👨🏾', '👩🏻‍🤝‍👨🏿', '👩🏼‍🤝‍👨🏻', '👫🏼', '👩🏼‍🤝‍👨🏽', '👩🏼‍🤝‍👨🏾', '👩🏼‍🤝‍👨🏿', '👩🏽‍🤝‍👨🏻', '👩🏽‍🤝‍👨🏼', '👫🏽', '👩🏽‍🤝‍👨🏾', '👩🏽‍🤝‍👨🏿', '👩🏾‍🤝‍👨🏻', '👩🏾‍🤝‍👨🏼', '👩🏾‍🤝‍👨🏽', '👫🏾', '👩🏾‍🤝‍👨🏿', '👩🏿‍🤝‍👨🏻', '👩🏿‍🤝‍👨🏼', '👩🏿‍🤝‍👨🏽', '👩🏿‍🤝‍👨🏾', '👫🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '👬',
            'category' => 1,
            'name' => 'men holding hands',
            'variations' => ['👬🏻', '👨🏻‍🤝‍👨🏼', '👨🏻‍🤝‍👨🏽', '👨🏻‍🤝‍👨🏾', '👨🏻‍🤝‍👨🏿', '👨🏼‍🤝‍👨🏻', '👬🏼', '👨🏼‍🤝‍👨🏽', '👨🏼‍🤝‍👨🏾', '👨🏼‍🤝‍👨🏿', '👨🏽‍🤝‍👨🏻', '👨🏽‍🤝‍👨🏼', '👬🏽', '👨🏽‍🤝‍👨🏾', '👨🏽‍🤝‍👨🏿', '👨🏾‍🤝‍👨🏻', '👨🏾‍🤝‍👨🏼', '👨🏾‍🤝‍👨🏽', '👬🏾', '👨🏾‍🤝‍👨🏿', '👨🏿‍🤝‍👨🏻', '👨🏿‍🤝‍👨🏼', '👨🏿‍🤝‍👨🏽', '👨🏿‍🤝‍👨🏾', '👬🏿'],
            'version' => '1.0'
        ], [
            'emoji' => '💏',
            'category' => 1,
            'name' => 'kiss',
            'variations' => ['👩‍❤️‍💋‍👨', '👨‍❤️‍💋‍👨', '👩‍❤️‍💋‍👩'],
            'version' => '1.0'
        ], [
            'emoji' => '💑',
            'category' => 1,
            'name' => 'couple with heart',
            'variations' => ['👩‍❤️‍👨', '👨‍❤️‍👨', '👩‍❤️‍👩'],
            'version' => '1.0'
        ], [
            'emoji' => '👪',
            'category' => 1,
            'name' => 'family',
            'version' => '1.0'
        ], [
            'emoji' => '👨‍👩‍👦',
            'category' => 1,
            'name' => 'family: man, woman, boy',
            'version' => '2.0'
        ], [
            'emoji' => '👨‍👩‍👧',
            'category' => 1,
            'name' => 'family: man, woman, girl',
            'version' => '2.0'
        ], [
            'emoji' => '👨‍👩‍👧‍👦',
            'category' => 1,
            'name' => 'family: man, woman, girl, boy',
            'version' => '2.0'
        ], [
            'emoji' => '👨‍👩‍👦‍👦',
            'category' => 1,
            'name' => 'family: man, woman, boy, boy',
            'version' => '2.0'
        ], [
            'emoji' => '👨‍👩‍👧‍👧',
            'category' => 1,
            'name' => 'family: man, woman, girl, girl',
            'version' => '2.0'
        ], [
            'emoji' => '👨‍👨‍👦',
            'category' => 1,
            'name' => 'family: man, man, boy',
            'version' => '2.0'
        ], [
            'emoji' => '👨‍👨‍👧',
            'category' => 1,
            'name' => 'family: man, man, girl',
            'version' => '2.0'
        ], [
            'emoji' => '👨‍👨‍👧‍👦',
            'category' => 1,
            'name' => 'family: man, man, girl, boy',
            'version' => '2.0'
        ], [
            'emoji' => '👨‍👨‍👦‍👦',
            'category' => 1,
            'name' => 'family: man, man, boy, boy',
            'version' => '2.0'
        ], [
            'emoji' => '👨‍👨‍👧‍👧',
            'category' => 1,
            'name' => 'family: man, man, girl, girl',
            'version' => '2.0'
        ], [
            'emoji' => '👩‍👩‍👦',
            'category' => 1,
            'name' => 'family: woman, woman, boy',
            'version' => '2.0'
        ], [
            'emoji' => '👩‍👩‍👧',
            'category' => 1,
            'name' => 'family: woman, woman, girl',
            'version' => '2.0'
        ], [
            'emoji' => '👩‍👩‍👧‍👦',
            'category' => 1,
            'name' => 'family: woman, woman, girl, boy',
            'version' => '2.0'
        ], [
            'emoji' => '👩‍👩‍👦‍👦',
            'category' => 1,
            'name' => 'family: woman, woman, boy, boy',
            'version' => '2.0'
        ], [
            'emoji' => '👩‍👩‍👧‍👧',
            'category' => 1,
            'name' => 'family: woman, woman, girl, girl',
            'version' => '2.0'
        ], [
            'emoji' => '👨‍👦',
            'category' => 1,
            'name' => 'family: man, boy',
            'version' => '4.0'
        ], [
            'emoji' => '👨‍👦‍👦',
            'category' => 1,
            'name' => 'family: man, boy, boy',
            'version' => '4.0'
        ], [
            'emoji' => '👨‍👧',
            'category' => 1,
            'name' => 'family: man, girl',
            'version' => '4.0'
        ], [
            'emoji' => '👨‍👧‍👦',
            'category' => 1,
            'name' => 'family: man, girl, boy',
            'version' => '4.0'
        ], [
            'emoji' => '👨‍👧‍👧',
            'category' => 1,
            'name' => 'family: man, girl, girl',
            'version' => '4.0'
        ], [
            'emoji' => '👩‍👦',
            'category' => 1,
            'name' => 'family: woman, boy',
            'version' => '4.0'
        ], [
            'emoji' => '👩‍👦‍👦',
            'category' => 1,
            'name' => 'family: woman, boy, boy',
            'version' => '4.0'
        ], [
            'emoji' => '👩‍👧',
            'category' => 1,
            'name' => 'family: woman, girl',
            'version' => '4.0'
        ], [
            'emoji' => '👩‍👧‍👦',
            'category' => 1,
            'name' => 'family: woman, girl, boy',
            'version' => '4.0'
        ], [
            'emoji' => '👩‍👧‍👧',
            'category' => 1,
            'name' => 'family: woman, girl, girl',
            'version' => '4.0'
        ], [
            'emoji' => '🗣️',
            'category' => 1,
            'name' => 'speaking head',
            'version' => '1.0'
        ], [
            'emoji' => '👤',
            'category' => 1,
            'name' => 'bust in silhouette',
            'version' => '1.0'
        ], [
            'emoji' => '👥',
            'category' => 1,
            'name' => 'busts in silhouette',
            'version' => '1.0'
        ], [
            'emoji' => '🫂',
            'category' => 1,
            'name' => 'people hugging',
            'version' => '13.0'
        ], [
            'emoji' => '👣',
            'category' => 1,
            'name' => 'footprints',
            'version' => '1.0'
        ], [
            'emoji' => '🐵',
            'category' => 2,
            'name' => 'monkey face',
            'version' => '1.0'
        ], [
            'emoji' => '🐒',
            'category' => 2,
            'name' => 'monkey',
            'version' => '1.0'
        ], [
            'emoji' => '🦍',
            'category' => 2,
            'name' => 'gorilla',
            'version' => '3.0'
        ], [
            'emoji' => '🦧',
            'category' => 2,
            'name' => 'orangutan',
            'version' => '12.0'
        ], [
            'emoji' => '🐶',
            'category' => 2,
            'name' => 'dog face',
            'version' => '1.0'
        ], [
            'emoji' => '🐕',
            'category' => 2,
            'name' => 'dog',
            'version' => '1.0'
        ], [
            'emoji' => '🦮',
            'category' => 2,
            'name' => 'guide dog',
            'version' => '12.0'
        ], [
            'emoji' => '🐕‍🦺',
            'category' => 2,
            'name' => 'service dog',
            'version' => '12.0'
        ], [
            'emoji' => '🐩',
            'category' => 2,
            'name' => 'poodle',
            'version' => '1.0'
        ], [
            'emoji' => '🐺',
            'category' => 2,
            'name' => 'wolf',
            'version' => '1.0'
        ], [
            'emoji' => '🦊',
            'category' => 2,
            'name' => 'fox',
            'version' => '3.0'
        ], [
            'emoji' => '🦝',
            'category' => 2,
            'name' => 'raccoon',
            'version' => '11.0'
        ], [
            'emoji' => '🐱',
            'category' => 2,
            'name' => 'cat face',
            'version' => '1.0'
        ], [
            'emoji' => '🐈',
            'category' => 2,
            'name' => 'cat',
            'version' => '1.0'
        ], [
            'emoji' => '🐈‍⬛',
            'category' => 2,
            'name' => 'black cat',
            'version' => '13.0'
        ], [
            'emoji' => '🦁',
            'category' => 2,
            'name' => 'lion',
            'version' => '1.0'
        ], [
            'emoji' => '🐯',
            'category' => 2,
            'name' => 'tiger face',
            'version' => '1.0'
        ], [
            'emoji' => '🐅',
            'category' => 2,
            'name' => 'tiger',
            'version' => '1.0'
        ], [
            'emoji' => '🐆',
            'category' => 2,
            'name' => 'leopard',
            'version' => '1.0'
        ], [
            'emoji' => '🐴',
            'category' => 2,
            'name' => 'horse face',
            'version' => '1.0'
        ], [
            'emoji' => '🐎',
            'category' => 2,
            'name' => 'horse',
            'version' => '1.0'
        ], [
            'emoji' => '🦄',
            'category' => 2,
            'name' => 'unicorn',
            'version' => '1.0'
        ], [
            'emoji' => '🦓',
            'category' => 2,
            'name' => 'zebra',
            'version' => '5.0'
        ], [
            'emoji' => '🦌',
            'category' => 2,
            'name' => 'deer',
            'version' => '3.0'
        ], [
            'emoji' => '🦬',
            'category' => 2,
            'name' => 'bison',
            'version' => '13.0'
        ], [
            'emoji' => '🐮',
            'category' => 2,
            'name' => 'cow face',
            'version' => '1.0'
        ], [
            'emoji' => '🐂',
            'category' => 2,
            'name' => 'ox',
            'version' => '1.0'
        ], [
            'emoji' => '🐃',
            'category' => 2,
            'name' => 'water buffalo',
            'version' => '1.0'
        ], [
            'emoji' => '🐄',
            'category' => 2,
            'name' => 'cow',
            'version' => '1.0'
        ], [
            'emoji' => '🐷',
            'category' => 2,
            'name' => 'pig face',
            'version' => '1.0'
        ], [
            'emoji' => '🐖',
            'category' => 2,
            'name' => 'pig',
            'version' => '1.0'
        ], [
            'emoji' => '🐗',
            'category' => 2,
            'name' => 'boar',
            'version' => '1.0'
        ], [
            'emoji' => '🐽',
            'category' => 2,
            'name' => 'pig nose',
            'version' => '1.0'
        ], [
            'emoji' => '🐏',
            'category' => 2,
            'name' => 'ram',
            'version' => '1.0'
        ], [
            'emoji' => '🐑',
            'category' => 2,
            'name' => 'ewe',
            'version' => '1.0'
        ], [
            'emoji' => '🐐',
            'category' => 2,
            'name' => 'goat',
            'version' => '1.0'
        ], [
            'emoji' => '🐪',
            'category' => 2,
            'name' => 'camel',
            'version' => '1.0'
        ], [
            'emoji' => '🐫',
            'category' => 2,
            'name' => 'two-hump camel',
            'version' => '1.0'
        ], [
            'emoji' => '🦙',
            'category' => 2,
            'name' => 'llama',
            'version' => '11.0'
        ], [
            'emoji' => '🦒',
            'category' => 2,
            'name' => 'giraffe',
            'version' => '5.0'
        ], [
            'emoji' => '🐘',
            'category' => 2,
            'name' => 'elephant',
            'version' => '1.0'
        ], [
            'emoji' => '🦣',
            'category' => 2,
            'name' => 'mammoth',
            'version' => '13.0'
        ], [
            'emoji' => '🦏',
            'category' => 2,
            'name' => 'rhinoceros',
            'version' => '3.0'
        ], [
            'emoji' => '🦛',
            'category' => 2,
            'name' => 'hippopotamus',
            'version' => '11.0'
        ], [
            'emoji' => '🐭',
            'category' => 2,
            'name' => 'mouse face',
            'version' => '1.0'
        ], [
            'emoji' => '🐁',
            'category' => 2,
            'name' => 'mouse',
            'version' => '1.0'
        ], [
            'emoji' => '🐀',
            'category' => 2,
            'name' => 'rat',
            'version' => '1.0'
        ], [
            'emoji' => '🐹',
            'category' => 2,
            'name' => 'hamster',
            'version' => '1.0'
        ], [
            'emoji' => '🐰',
            'category' => 2,
            'name' => 'rabbit face',
            'version' => '1.0'
        ], [
            'emoji' => '🐇',
            'category' => 2,
            'name' => 'rabbit',
            'version' => '1.0'
        ], [
            'emoji' => '🐿️',
            'category' => 2,
            'name' => 'chipmunk',
            'version' => '1.0'
        ], [
            'emoji' => '🦫',
            'category' => 2,
            'name' => 'beaver',
            'version' => '13.0'
        ], [
            'emoji' => '🦔',
            'category' => 2,
            'name' => 'hedgehog',
            'version' => '5.0'
        ], [
            'emoji' => '🦇',
            'category' => 2,
            'name' => 'bat',
            'version' => '3.0'
        ], [
            'emoji' => '🐻',
            'category' => 2,
            'name' => 'bear',
            'version' => '1.0'
        ], [
            'emoji' => '🐻‍❄️',
            'category' => 2,
            'name' => 'polar bear',
            'version' => '13.0'
        ], [
            'emoji' => '🐨',
            'category' => 2,
            'name' => 'koala',
            'version' => '1.0'
        ], [
            'emoji' => '🐼',
            'category' => 2,
            'name' => 'panda',
            'version' => '1.0'
        ], [
            'emoji' => '🦥',
            'category' => 2,
            'name' => 'sloth',
            'version' => '12.0'
        ], [
            'emoji' => '🦦',
            'category' => 2,
            'name' => 'otter',
            'version' => '12.0'
        ], [
            'emoji' => '🦨',
            'category' => 2,
            'name' => 'skunk',
            'version' => '12.0'
        ], [
            'emoji' => '🦘',
            'category' => 2,
            'name' => 'kangaroo',
            'version' => '11.0'
        ], [
            'emoji' => '🦡',
            'category' => 2,
            'name' => 'badger',
            'version' => '11.0'
        ], [
            'emoji' => '🐾',
            'category' => 2,
            'name' => 'paw prints',
            'version' => '1.0'
        ], [
            'emoji' => '🦃',
            'category' => 2,
            'name' => 'turkey',
            'version' => '1.0'
        ], [
            'emoji' => '🐔',
            'category' => 2,
            'name' => 'chicken',
            'version' => '1.0'
        ], [
            'emoji' => '🐓',
            'category' => 2,
            'name' => 'rooster',
            'version' => '1.0'
        ], [
            'emoji' => '🐣',
            'category' => 2,
            'name' => 'hatching chick',
            'version' => '1.0'
        ], [
            'emoji' => '🐤',
            'category' => 2,
            'name' => 'baby chick',
            'version' => '1.0'
        ], [
            'emoji' => '🐥',
            'category' => 2,
            'name' => 'front-facing baby chick',
            'version' => '1.0'
        ], [
            'emoji' => '🐦',
            'category' => 2,
            'name' => 'bird',
            'version' => '1.0'
        ], [
            'emoji' => '🐧',
            'category' => 2,
            'name' => 'penguin',
            'version' => '1.0'
        ], [
            'emoji' => '🕊️',
            'category' => 2,
            'name' => 'dove',
            'version' => '1.0'
        ], [
            'emoji' => '🦅',
            'category' => 2,
            'name' => 'eagle',
            'version' => '3.0'
        ], [
            'emoji' => '🦆',
            'category' => 2,
            'name' => 'duck',
            'version' => '3.0'
        ], [
            'emoji' => '🦢',
            'category' => 2,
            'name' => 'swan',
            'version' => '11.0'
        ], [
            'emoji' => '🦉',
            'category' => 2,
            'name' => 'owl',
            'version' => '3.0'
        ], [
            'emoji' => '🦤',
            'category' => 2,
            'name' => 'dodo',
            'version' => '13.0'
        ], [
            'emoji' => '🪶',
            'category' => 2,
            'name' => 'feather',
            'version' => '13.0'
        ], [
            'emoji' => '🦩',
            'category' => 2,
            'name' => 'flamingo',
            'version' => '12.0'
        ], [
            'emoji' => '🦚',
            'category' => 2,
            'name' => 'peacock',
            'version' => '11.0'
        ], [
            'emoji' => '🦜',
            'category' => 2,
            'name' => 'parrot',
            'version' => '11.0'
        ], [
            'emoji' => '🐸',
            'category' => 2,
            'name' => 'frog',
            'version' => '1.0'
        ], [
            'emoji' => '🐊',
            'category' => 2,
            'name' => 'crocodile',
            'version' => '1.0'
        ], [
            'emoji' => '🐢',
            'category' => 2,
            'name' => 'turtle',
            'version' => '1.0'
        ], [
            'emoji' => '🦎',
            'category' => 2,
            'name' => 'lizard',
            'version' => '3.0'
        ], [
            'emoji' => '🐍',
            'category' => 2,
            'name' => 'snake',
            'version' => '1.0'
        ], [
            'emoji' => '🐲',
            'category' => 2,
            'name' => 'dragon face',
            'version' => '1.0'
        ], [
            'emoji' => '🐉',
            'category' => 2,
            'name' => 'dragon',
            'version' => '1.0'
        ], [
            'emoji' => '🦕',
            'category' => 2,
            'name' => 'sauropod',
            'version' => '5.0'
        ], [
            'emoji' => '🦖',
            'category' => 2,
            'name' => 'T-Rex',
            'version' => '5.0'
        ], [
            'emoji' => '🐳',
            'category' => 2,
            'name' => 'spouting whale',
            'version' => '1.0'
        ], [
            'emoji' => '🐋',
            'category' => 2,
            'name' => 'whale',
            'version' => '1.0'
        ], [
            'emoji' => '🐬',
            'category' => 2,
            'name' => 'dolphin',
            'version' => '1.0'
        ], [
            'emoji' => '🦭',
            'category' => 2,
            'name' => 'seal',
            'version' => '13.0'
        ], [
            'emoji' => '🐟',
            'category' => 2,
            'name' => 'fish',
            'version' => '1.0'
        ], [
            'emoji' => '🐠',
            'category' => 2,
            'name' => 'tropical fish',
            'version' => '1.0'
        ], [
            'emoji' => '🐡',
            'category' => 2,
            'name' => 'blowfish',
            'version' => '1.0'
        ], [
            'emoji' => '🦈',
            'category' => 2,
            'name' => 'shark',
            'version' => '3.0'
        ], [
            'emoji' => '🐙',
            'category' => 2,
            'name' => 'octopus',
            'version' => '1.0'
        ], [
            'emoji' => '🐚',
            'category' => 2,
            'name' => 'spiral shell',
            'version' => '1.0'
        ], [
            'emoji' => '🐌',
            'category' => 2,
            'name' => 'snail',
            'version' => '1.0'
        ], [
            'emoji' => '🦋',
            'category' => 2,
            'name' => 'butterfly',
            'version' => '3.0'
        ], [
            'emoji' => '🐛',
            'category' => 2,
            'name' => 'bug',
            'version' => '1.0'
        ], [
            'emoji' => '🐜',
            'category' => 2,
            'name' => 'ant',
            'version' => '1.0'
        ], [
            'emoji' => '🐝',
            'category' => 2,
            'name' => 'honeybee',
            'version' => '1.0'
        ], [
            'emoji' => '🪲',
            'category' => 2,
            'name' => 'beetle',
            'version' => '13.0'
        ], [
            'emoji' => '🐞',
            'category' => 2,
            'name' => 'lady beetle',
            'version' => '1.0'
        ], [
            'emoji' => '🦗',
            'category' => 2,
            'name' => 'cricket',
            'version' => '5.0'
        ], [
            'emoji' => '🪳',
            'category' => 2,
            'name' => 'cockroach',
            'version' => '13.0'
        ], [
            'emoji' => '🕷️',
            'category' => 2,
            'name' => 'spider',
            'version' => '1.0'
        ], [
            'emoji' => '🕸️',
            'category' => 2,
            'name' => 'spider web',
            'version' => '1.0'
        ], [
            'emoji' => '🦂',
            'category' => 2,
            'name' => 'scorpion',
            'version' => '1.0'
        ], [
            'emoji' => '🦟',
            'category' => 2,
            'name' => 'mosquito',
            'version' => '11.0'
        ], [
            'emoji' => '🪰',
            'category' => 2,
            'name' => 'fly',
            'version' => '13.0'
        ], [
            'emoji' => '🪱',
            'category' => 2,
            'name' => 'worm',
            'version' => '13.0'
        ], [
            'emoji' => '🦠',
            'category' => 2,
            'name' => 'microbe',
            'version' => '11.0'
        ], [
            'emoji' => '💐',
            'category' => 2,
            'name' => 'bouquet',
            'version' => '1.0'
        ], [
            'emoji' => '🌸',
            'category' => 2,
            'name' => 'cherry blossom',
            'version' => '1.0'
        ], [
            'emoji' => '💮',
            'category' => 2,
            'name' => 'white flower',
            'version' => '1.0'
        ], [
            'emoji' => '🏵️',
            'category' => 2,
            'name' => 'rosette',
            'version' => '1.0'
        ], [
            'emoji' => '🌹',
            'category' => 2,
            'name' => 'rose',
            'version' => '1.0'
        ], [
            'emoji' => '🥀',
            'category' => 2,
            'name' => 'wilted flower',
            'version' => '3.0'
        ], [
            'emoji' => '🌺',
            'category' => 2,
            'name' => 'hibiscus',
            'version' => '1.0'
        ], [
            'emoji' => '🌻',
            'category' => 2,
            'name' => 'sunflower',
            'version' => '1.0'
        ], [
            'emoji' => '🌼',
            'category' => 2,
            'name' => 'blossom',
            'version' => '1.0'
        ], [
            'emoji' => '🌷',
            'category' => 2,
            'name' => 'tulip',
            'version' => '1.0'
        ], [
            'emoji' => '🌱',
            'category' => 2,
            'name' => 'seedling',
            'version' => '1.0'
        ], [
            'emoji' => '🪴',
            'category' => 2,
            'name' => 'potted plant',
            'version' => '13.0'
        ], [
            'emoji' => '🌲',
            'category' => 2,
            'name' => 'evergreen tree',
            'version' => '1.0'
        ], [
            'emoji' => '🌳',
            'category' => 2,
            'name' => 'deciduous tree',
            'version' => '1.0'
        ], [
            'emoji' => '🌴',
            'category' => 2,
            'name' => 'palm tree',
            'version' => '1.0'
        ], [
            'emoji' => '🌵',
            'category' => 2,
            'name' => 'cactus',
            'version' => '1.0'
        ], [
            'emoji' => '🌾',
            'category' => 2,
            'name' => 'sheaf of rice',
            'version' => '1.0'
        ], [
            'emoji' => '🌿',
            'category' => 2,
            'name' => 'herb',
            'version' => '1.0'
        ], [
            'emoji' => '☘️',
            'category' => 2,
            'name' => 'shamrock',
            'version' => '1.0'
        ], [
            'emoji' => '🍀',
            'category' => 2,
            'name' => 'four leaf clover',
            'version' => '1.0'
        ], [
            'emoji' => '🍁',
            'category' => 2,
            'name' => 'maple leaf',
            'version' => '1.0'
        ], [
            'emoji' => '🍂',
            'category' => 2,
            'name' => 'fallen leaf',
            'version' => '1.0'
        ], [
            'emoji' => '🍃',
            'category' => 2,
            'name' => 'leaf fluttering in wind',
            'version' => '1.0'
        ], [
            'emoji' => '🍇',
            'category' => 3,
            'name' => 'grapes',
            'version' => '1.0'
        ], [
            'emoji' => '🍈',
            'category' => 3,
            'name' => 'melon',
            'version' => '1.0'
        ], [
            'emoji' => '🍉',
            'category' => 3,
            'name' => 'watermelon',
            'version' => '1.0'
        ], [
            'emoji' => '🍊',
            'category' => 3,
            'name' => 'tangerine',
            'version' => '1.0'
        ], [
            'emoji' => '🍋',
            'category' => 3,
            'name' => 'lemon',
            'version' => '1.0'
        ], [
            'emoji' => '🍌',
            'category' => 3,
            'name' => 'banana',
            'version' => '1.0'
        ], [
            'emoji' => '🍍',
            'category' => 3,
            'name' => 'pineapple',
            'version' => '1.0'
        ], [
            'emoji' => '🥭',
            'category' => 3,
            'name' => 'mango',
            'version' => '11.0'
        ], [
            'emoji' => '🍎',
            'category' => 3,
            'name' => 'red apple',
            'version' => '1.0'
        ], [
            'emoji' => '🍏',
            'category' => 3,
            'name' => 'green apple',
            'version' => '1.0'
        ], [
            'emoji' => '🍐',
            'category' => 3,
            'name' => 'pear',
            'version' => '1.0'
        ], [
            'emoji' => '🍑',
            'category' => 3,
            'name' => 'peach',
            'version' => '1.0'
        ], [
            'emoji' => '🍒',
            'category' => 3,
            'name' => 'cherries',
            'version' => '1.0'
        ], [
            'emoji' => '🍓',
            'category' => 3,
            'name' => 'strawberry',
            'version' => '1.0'
        ], [
            'emoji' => '🫐',
            'category' => 3,
            'name' => 'blueberries',
            'version' => '13.0'
        ], [
            'emoji' => '🥝',
            'category' => 3,
            'name' => 'kiwi fruit',
            'version' => '3.0'
        ], [
            'emoji' => '🍅',
            'category' => 3,
            'name' => 'tomato',
            'version' => '1.0'
        ], [
            'emoji' => '🫒',
            'category' => 3,
            'name' => 'olive',
            'version' => '13.0'
        ], [
            'emoji' => '🥥',
            'category' => 3,
            'name' => 'coconut',
            'version' => '5.0'
        ], [
            'emoji' => '🥑',
            'category' => 3,
            'name' => 'avocado',
            'version' => '3.0'
        ], [
            'emoji' => '🍆',
            'category' => 3,
            'name' => 'eggplant',
            'version' => '1.0'
        ], [
            'emoji' => '🥔',
            'category' => 3,
            'name' => 'potato',
            'version' => '3.0'
        ], [
            'emoji' => '🥕',
            'category' => 3,
            'name' => 'carrot',
            'version' => '3.0'
        ], [
            'emoji' => '🌽',
            'category' => 3,
            'name' => 'ear of corn',
            'version' => '1.0'
        ], [
            'emoji' => '🌶️',
            'category' => 3,
            'name' => 'hot pepper',
            'version' => '1.0'
        ], [
            'emoji' => '🫑',
            'category' => 3,
            'name' => 'bell pepper',
            'version' => '13.0'
        ], [
            'emoji' => '🥒',
            'category' => 3,
            'name' => 'cucumber',
            'version' => '3.0'
        ], [
            'emoji' => '🥬',
            'category' => 3,
            'name' => 'leafy green',
            'version' => '11.0'
        ], [
            'emoji' => '🥦',
            'category' => 3,
            'name' => 'broccoli',
            'version' => '5.0'
        ], [
            'emoji' => '🧄',
            'category' => 3,
            'name' => 'garlic',
            'version' => '12.0'
        ], [
            'emoji' => '🧅',
            'category' => 3,
            'name' => 'onion',
            'version' => '12.0'
        ], [
            'emoji' => '🍄',
            'category' => 3,
            'name' => 'mushroom',
            'version' => '1.0'
        ], [
            'emoji' => '🥜',
            'category' => 3,
            'name' => 'peanuts',
            'version' => '3.0'
        ], [
            'emoji' => '🌰',
            'category' => 3,
            'name' => 'chestnut',
            'version' => '1.0'
        ], [
            'emoji' => '🍞',
            'category' => 3,
            'name' => 'bread',
            'version' => '1.0'
        ], [
            'emoji' => '🥐',
            'category' => 3,
            'name' => 'croissant',
            'version' => '3.0'
        ], [
            'emoji' => '🥖',
            'category' => 3,
            'name' => 'baguette bread',
            'version' => '3.0'
        ], [
            'emoji' => '🫓',
            'category' => 3,
            'name' => 'flatbread',
            'version' => '13.0'
        ], [
            'emoji' => '🥨',
            'category' => 3,
            'name' => 'pretzel',
            'version' => '5.0'
        ], [
            'emoji' => '🥯',
            'category' => 3,
            'name' => 'bagel',
            'version' => '11.0'
        ], [
            'emoji' => '🥞',
            'category' => 3,
            'name' => 'pancakes',
            'version' => '3.0'
        ], [
            'emoji' => '🧇',
            'category' => 3,
            'name' => 'waffle',
            'version' => '12.0'
        ], [
            'emoji' => '🧀',
            'category' => 3,
            'name' => 'cheese wedge',
            'version' => '1.0'
        ], [
            'emoji' => '🍖',
            'category' => 3,
            'name' => 'meat on bone',
            'version' => '1.0'
        ], [
            'emoji' => '🍗',
            'category' => 3,
            'name' => 'poultry leg',
            'version' => '1.0'
        ], [
            'emoji' => '🥩',
            'category' => 3,
            'name' => 'cut of meat',
            'version' => '5.0'
        ], [
            'emoji' => '🥓',
            'category' => 3,
            'name' => 'bacon',
            'version' => '3.0'
        ], [
            'emoji' => '🍔',
            'category' => 3,
            'name' => 'hamburger',
            'version' => '1.0'
        ], [
            'emoji' => '🍟',
            'category' => 3,
            'name' => 'french fries',
            'version' => '1.0'
        ], [
            'emoji' => '🍕',
            'category' => 3,
            'name' => 'pizza',
            'version' => '1.0'
        ], [
            'emoji' => '🌭',
            'category' => 3,
            'name' => 'hot dog',
            'version' => '1.0'
        ], [
            'emoji' => '🥪',
            'category' => 3,
            'name' => 'sandwich',
            'version' => '5.0'
        ], [
            'emoji' => '🌮',
            'category' => 3,
            'name' => 'taco',
            'version' => '1.0'
        ], [
            'emoji' => '🌯',
            'category' => 3,
            'name' => 'burrito',
            'version' => '1.0'
        ], [
            'emoji' => '🫔',
            'category' => 3,
            'name' => 'tamale',
            'version' => '13.0'
        ], [
            'emoji' => '🥙',
            'category' => 3,
            'name' => 'stuffed flatbread',
            'version' => '3.0'
        ], [
            'emoji' => '🧆',
            'category' => 3,
            'name' => 'falafel',
            'version' => '12.0'
        ], [
            'emoji' => '🥚',
            'category' => 3,
            'name' => 'egg',
            'version' => '3.0'
        ], [
            'emoji' => '🍳',
            'category' => 3,
            'name' => 'cooking',
            'version' => '1.0'
        ], [
            'emoji' => '🥘',
            'category' => 3,
            'name' => 'shallow pan of food',
            'version' => '3.0'
        ], [
            'emoji' => '🍲',
            'category' => 3,
            'name' => 'pot of food',
            'version' => '1.0'
        ], [
            'emoji' => '🫕',
            'category' => 3,
            'name' => 'fondue',
            'version' => '13.0'
        ], [
            'emoji' => '🥣',
            'category' => 3,
            'name' => 'bowl with spoon',
            'version' => '5.0'
        ], [
            'emoji' => '🥗',
            'category' => 3,
            'name' => 'green salad',
            'version' => '3.0'
        ], [
            'emoji' => '🍿',
            'category' => 3,
            'name' => 'popcorn',
            'version' => '1.0'
        ], [
            'emoji' => '🧈',
            'category' => 3,
            'name' => 'butter',
            'version' => '12.0'
        ], [
            'emoji' => '🧂',
            'category' => 3,
            'name' => 'salt',
            'version' => '11.0'
        ], [
            'emoji' => '🥫',
            'category' => 3,
            'name' => 'canned food',
            'version' => '5.0'
        ], [
            'emoji' => '🍱',
            'category' => 3,
            'name' => 'bento box',
            'version' => '1.0'
        ], [
            'emoji' => '🍘',
            'category' => 3,
            'name' => 'rice cracker',
            'version' => '1.0'
        ], [
            'emoji' => '🍙',
            'category' => 3,
            'name' => 'rice ball',
            'version' => '1.0'
        ], [
            'emoji' => '🍚',
            'category' => 3,
            'name' => 'cooked rice',
            'version' => '1.0'
        ], [
            'emoji' => '🍛',
            'category' => 3,
            'name' => 'curry rice',
            'version' => '1.0'
        ], [
            'emoji' => '🍜',
            'category' => 3,
            'name' => 'steaming bowl',
            'version' => '1.0'
        ], [
            'emoji' => '🍝',
            'category' => 3,
            'name' => 'spaghetti',
            'version' => '1.0'
        ], [
            'emoji' => '🍠',
            'category' => 3,
            'name' => 'roasted sweet potato',
            'version' => '1.0'
        ], [
            'emoji' => '🍢',
            'category' => 3,
            'name' => 'oden',
            'version' => '1.0'
        ], [
            'emoji' => '🍣',
            'category' => 3,
            'name' => 'sushi',
            'version' => '1.0'
        ], [
            'emoji' => '🍤',
            'category' => 3,
            'name' => 'fried shrimp',
            'version' => '1.0'
        ], [
            'emoji' => '🍥',
            'category' => 3,
            'name' => 'fish cake with swirl',
            'version' => '1.0'
        ], [
            'emoji' => '🥮',
            'category' => 3,
            'name' => 'moon cake',
            'version' => '11.0'
        ], [
            'emoji' => '🍡',
            'category' => 3,
            'name' => 'dango',
            'version' => '1.0'
        ], [
            'emoji' => '🥟',
            'category' => 3,
            'name' => 'dumpling',
            'version' => '5.0'
        ], [
            'emoji' => '🥠',
            'category' => 3,
            'name' => 'fortune cookie',
            'version' => '5.0'
        ], [
            'emoji' => '🥡',
            'category' => 3,
            'name' => 'takeout box',
            'version' => '5.0'
        ], [
            'emoji' => '🦀',
            'category' => 3,
            'name' => 'crab',
            'version' => '1.0'
        ], [
            'emoji' => '🦞',
            'category' => 3,
            'name' => 'lobster',
            'version' => '11.0'
        ], [
            'emoji' => '🦐',
            'category' => 3,
            'name' => 'shrimp',
            'version' => '3.0'
        ], [
            'emoji' => '🦑',
            'category' => 3,
            'name' => 'squid',
            'version' => '3.0'
        ], [
            'emoji' => '🦪',
            'category' => 3,
            'name' => 'oyster',
            'version' => '12.0'
        ], [
            'emoji' => '🍦',
            'category' => 3,
            'name' => 'soft ice cream',
            'version' => '1.0'
        ], [
            'emoji' => '🍧',
            'category' => 3,
            'name' => 'shaved ice',
            'version' => '1.0'
        ], [
            'emoji' => '🍨',
            'category' => 3,
            'name' => 'ice cream',
            'version' => '1.0'
        ], [
            'emoji' => '🍩',
            'category' => 3,
            'name' => 'doughnut',
            'version' => '1.0'
        ], [
            'emoji' => '🍪',
            'category' => 3,
            'name' => 'cookie',
            'version' => '1.0'
        ], [
            'emoji' => '🎂',
            'category' => 3,
            'name' => 'birthday cake',
            'version' => '1.0'
        ], [
            'emoji' => '🍰',
            'category' => 3,
            'name' => 'shortcake',
            'version' => '1.0'
        ], [
            'emoji' => '🧁',
            'category' => 3,
            'name' => 'cupcake',
            'version' => '11.0'
        ], [
            'emoji' => '🥧',
            'category' => 3,
            'name' => 'pie',
            'version' => '5.0'
        ], [
            'emoji' => '🍫',
            'category' => 3,
            'name' => 'chocolate bar',
            'version' => '1.0'
        ], [
            'emoji' => '🍬',
            'category' => 3,
            'name' => 'candy',
            'version' => '1.0'
        ], [
            'emoji' => '🍭',
            'category' => 3,
            'name' => 'lollipop',
            'version' => '1.0'
        ], [
            'emoji' => '🍮',
            'category' => 3,
            'name' => 'custard',
            'version' => '1.0'
        ], [
            'emoji' => '🍯',
            'category' => 3,
            'name' => 'honey pot',
            'version' => '1.0'
        ], [
            'emoji' => '🍼',
            'category' => 3,
            'name' => 'baby bottle',
            'version' => '1.0'
        ], [
            'emoji' => '🥛',
            'category' => 3,
            'name' => 'glass of milk',
            'version' => '3.0'
        ], [
            'emoji' => '☕',
            'category' => 3,
            'name' => 'hot beverage',
            'version' => '1.0'
        ], [
            'emoji' => '🫖',
            'category' => 3,
            'name' => 'teapot',
            'version' => '13.0'
        ], [
            'emoji' => '🍵',
            'category' => 3,
            'name' => 'teacup without handle',
            'version' => '1.0'
        ], [
            'emoji' => '🍶',
            'category' => 3,
            'name' => 'sake',
            'version' => '1.0'
        ], [
            'emoji' => '🍾',
            'category' => 3,
            'name' => 'bottle with popping cork',
            'version' => '1.0'
        ], [
            'emoji' => '🍷',
            'category' => 3,
            'name' => 'wine glass',
            'version' => '1.0'
        ], [
            'emoji' => '🍸',
            'category' => 3,
            'name' => 'cocktail glass',
            'version' => '1.0'
        ], [
            'emoji' => '🍹',
            'category' => 3,
            'name' => 'tropical drink',
            'version' => '1.0'
        ], [
            'emoji' => '🍺',
            'category' => 3,
            'name' => 'beer mug',
            'version' => '1.0'
        ], [
            'emoji' => '🍻',
            'category' => 3,
            'name' => 'clinking beer mugs',
            'version' => '1.0'
        ], [
            'emoji' => '🥂',
            'category' => 3,
            'name' => 'clinking glasses',
            'version' => '3.0'
        ], [
            'emoji' => '🥃',
            'category' => 3,
            'name' => 'tumbler glass',
            'version' => '3.0'
        ], [
            'emoji' => '🥤',
            'category' => 3,
            'name' => 'cup with straw',
            'version' => '5.0'
        ], [
            'emoji' => '🧋',
            'category' => 3,
            'name' => 'bubble tea',
            'version' => '13.0'
        ], [
            'emoji' => '🧃',
            'category' => 3,
            'name' => 'beverage box',
            'version' => '12.0'
        ], [
            'emoji' => '🧉',
            'category' => 3,
            'name' => 'mate',
            'version' => '12.0'
        ], [
            'emoji' => '🧊',
            'category' => 3,
            'name' => 'ice',
            'version' => '12.0'
        ], [
            'emoji' => '🥢',
            'category' => 3,
            'name' => 'chopsticks',
            'version' => '5.0'
        ], [
            'emoji' => '🍽️',
            'category' => 3,
            'name' => 'fork and knife with plate',
            'version' => '1.0'
        ], [
            'emoji' => '🍴',
            'category' => 3,
            'name' => 'fork and knife',
            'version' => '1.0'
        ], [
            'emoji' => '🥄',
            'category' => 3,
            'name' => 'spoon',
            'version' => '3.0'
        ], [
            'emoji' => '🔪',
            'category' => 3,
            'name' => 'kitchen knife',
            'version' => '1.0'
        ], [
            'emoji' => '🏺',
            'category' => 3,
            'name' => 'amphora',
            'version' => '1.0'
        ], [
            'emoji' => '🌍',
            'category' => 4,
            'name' => 'globe showing Europe-Africa',
            'version' => '1.0'
        ], [
            'emoji' => '🌎',
            'category' => 4,
            'name' => 'globe showing Americas',
            'version' => '1.0'
        ], [
            'emoji' => '🌏',
            'category' => 4,
            'name' => 'globe showing Asia-Australia',
            'version' => '1.0'
        ], [
            'emoji' => '🌐',
            'category' => 4,
            'name' => 'globe with meridians',
            'version' => '1.0'
        ], [
            'emoji' => '🗺️',
            'category' => 4,
            'name' => 'world map',
            'version' => '1.0'
        ], [
            'emoji' => '🗾',
            'category' => 4,
            'name' => 'map of Japan',
            'version' => '1.0'
        ], [
            'emoji' => '🧭',
            'category' => 4,
            'name' => 'compass',
            'version' => '11.0'
        ], [
            'emoji' => '🏔️',
            'category' => 4,
            'name' => 'snow-capped mountain',
            'version' => '1.0'
        ], [
            'emoji' => '⛰️',
            'category' => 4,
            'name' => 'mountain',
            'version' => '1.0'
        ], [
            'emoji' => '🌋',
            'category' => 4,
            'name' => 'volcano',
            'version' => '1.0'
        ], [
            'emoji' => '🗻',
            'category' => 4,
            'name' => 'mount fuji',
            'version' => '1.0'
        ], [
            'emoji' => '🏕️',
            'category' => 4,
            'name' => 'camping',
            'version' => '1.0'
        ], [
            'emoji' => '🏖️',
            'category' => 4,
            'name' => 'beach with umbrella',
            'version' => '1.0'
        ], [
            'emoji' => '🏜️',
            'category' => 4,
            'name' => 'desert',
            'version' => '1.0'
        ], [
            'emoji' => '🏝️',
            'category' => 4,
            'name' => 'desert island',
            'version' => '1.0'
        ], [
            'emoji' => '🏞️',
            'category' => 4,
            'name' => 'national park',
            'version' => '1.0'
        ], [
            'emoji' => '🏟️',
            'category' => 4,
            'name' => 'stadium',
            'version' => '1.0'
        ], [
            'emoji' => '🏛️',
            'category' => 4,
            'name' => 'classical building',
            'version' => '1.0'
        ], [
            'emoji' => '🏗️',
            'category' => 4,
            'name' => 'building construction',
            'version' => '1.0'
        ], [
            'emoji' => '🧱',
            'category' => 4,
            'name' => 'brick',
            'version' => '11.0'
        ], [
            'emoji' => '🪨',
            'category' => 4,
            'name' => 'rock',
            'version' => '13.0'
        ], [
            'emoji' => '🪵',
            'category' => 4,
            'name' => 'wood',
            'version' => '13.0'
        ], [
            'emoji' => '🛖',
            'category' => 4,
            'name' => 'hut',
            'version' => '13.0'
        ], [
            'emoji' => '🏘️',
            'category' => 4,
            'name' => 'houses',
            'version' => '1.0'
        ], [
            'emoji' => '🏚️',
            'category' => 4,
            'name' => 'derelict house',
            'version' => '1.0'
        ], [
            'emoji' => '🏠',
            'category' => 4,
            'name' => 'house',
            'version' => '1.0'
        ], [
            'emoji' => '🏡',
            'category' => 4,
            'name' => 'house with garden',
            'version' => '1.0'
        ], [
            'emoji' => '🏢',
            'category' => 4,
            'name' => 'office building',
            'version' => '1.0'
        ], [
            'emoji' => '🏣',
            'category' => 4,
            'name' => 'Japanese post office',
            'version' => '1.0'
        ], [
            'emoji' => '🏤',
            'category' => 4,
            'name' => 'post office',
            'version' => '1.0'
        ], [
            'emoji' => '🏥',
            'category' => 4,
            'name' => 'hospital',
            'version' => '1.0'
        ], [
            'emoji' => '🏦',
            'category' => 4,
            'name' => 'bank',
            'version' => '1.0'
        ], [
            'emoji' => '🏨',
            'category' => 4,
            'name' => 'hotel',
            'version' => '1.0'
        ], [
            'emoji' => '🏩',
            'category' => 4,
            'name' => 'love hotel',
            'version' => '1.0'
        ], [
            'emoji' => '🏪',
            'category' => 4,
            'name' => 'convenience store',
            'version' => '1.0'
        ], [
            'emoji' => '🏫',
            'category' => 4,
            'name' => 'school',
            'version' => '1.0'
        ], [
            'emoji' => '🏬',
            'category' => 4,
            'name' => 'department store',
            'version' => '1.0'
        ], [
            'emoji' => '🏭',
            'category' => 4,
            'name' => 'factory',
            'version' => '1.0'
        ], [
            'emoji' => '🏯',
            'category' => 4,
            'name' => 'Japanese castle',
            'version' => '1.0'
        ], [
            'emoji' => '🏰',
            'category' => 4,
            'name' => 'castle',
            'version' => '1.0'
        ], [
            'emoji' => '💒',
            'category' => 4,
            'name' => 'wedding',
            'version' => '1.0'
        ], [
            'emoji' => '🗼',
            'category' => 4,
            'name' => 'Tokyo tower',
            'version' => '1.0'
        ], [
            'emoji' => '🗽',
            'category' => 4,
            'name' => 'Statue of Liberty',
            'version' => '1.0'
        ], [
            'emoji' => '⛪',
            'category' => 4,
            'name' => 'church',
            'version' => '1.0'
        ], [
            'emoji' => '🕌',
            'category' => 4,
            'name' => 'mosque',
            'version' => '1.0'
        ], [
            'emoji' => '🛕',
            'category' => 4,
            'name' => 'hindu temple',
            'version' => '12.0'
        ], [
            'emoji' => '🕍',
            'category' => 4,
            'name' => 'synagogue',
            'version' => '1.0'
        ], [
            'emoji' => '⛩️',
            'category' => 4,
            'name' => 'shinto shrine',
            'version' => '1.0'
        ], [
            'emoji' => '🕋',
            'category' => 4,
            'name' => 'kaaba',
            'version' => '1.0'
        ], [
            'emoji' => '⛲',
            'category' => 4,
            'name' => 'fountain',
            'version' => '1.0'
        ], [
            'emoji' => '⛺',
            'category' => 4,
            'name' => 'tent',
            'version' => '1.0'
        ], [
            'emoji' => '🌁',
            'category' => 4,
            'name' => 'foggy',
            'version' => '1.0'
        ], [
            'emoji' => '🌃',
            'category' => 4,
            'name' => 'night with stars',
            'version' => '1.0'
        ], [
            'emoji' => '🏙️',
            'category' => 4,
            'name' => 'cityscape',
            'version' => '1.0'
        ], [
            'emoji' => '🌄',
            'category' => 4,
            'name' => 'sunrise over mountains',
            'version' => '1.0'
        ], [
            'emoji' => '🌅',
            'category' => 4,
            'name' => 'sunrise',
            'version' => '1.0'
        ], [
            'emoji' => '🌆',
            'category' => 4,
            'name' => 'cityscape at dusk',
            'version' => '1.0'
        ], [
            'emoji' => '🌇',
            'category' => 4,
            'name' => 'sunset',
            'version' => '1.0'
        ], [
            'emoji' => '🌉',
            'category' => 4,
            'name' => 'bridge at night',
            'version' => '1.0'
        ], [
            'emoji' => '♨️',
            'category' => 4,
            'name' => 'hot springs',
            'version' => '1.0'
        ], [
            'emoji' => '🎠',
            'category' => 4,
            'name' => 'carousel horse',
            'version' => '1.0'
        ], [
            'emoji' => '🎡',
            'category' => 4,
            'name' => 'ferris wheel',
            'version' => '1.0'
        ], [
            'emoji' => '🎢',
            'category' => 4,
            'name' => 'roller coaster',
            'version' => '1.0'
        ], [
            'emoji' => '💈',
            'category' => 4,
            'name' => 'barber pole',
            'version' => '1.0'
        ], [
            'emoji' => '🎪',
            'category' => 4,
            'name' => 'circus tent',
            'version' => '1.0'
        ], [
            'emoji' => '🚂',
            'category' => 4,
            'name' => 'locomotive',
            'version' => '1.0'
        ], [
            'emoji' => '🚃',
            'category' => 4,
            'name' => 'railway car',
            'version' => '1.0'
        ], [
            'emoji' => '🚄',
            'category' => 4,
            'name' => 'high-speed train',
            'version' => '1.0'
        ], [
            'emoji' => '🚅',
            'category' => 4,
            'name' => 'bullet train',
            'version' => '1.0'
        ], [
            'emoji' => '🚆',
            'category' => 4,
            'name' => 'train',
            'version' => '1.0'
        ], [
            'emoji' => '🚇',
            'category' => 4,
            'name' => 'metro',
            'version' => '1.0'
        ], [
            'emoji' => '🚈',
            'category' => 4,
            'name' => 'light rail',
            'version' => '1.0'
        ], [
            'emoji' => '🚉',
            'category' => 4,
            'name' => 'station',
            'version' => '1.0'
        ], [
            'emoji' => '🚊',
            'category' => 4,
            'name' => 'tram',
            'version' => '1.0'
        ], [
            'emoji' => '🚝',
            'category' => 4,
            'name' => 'monorail',
            'version' => '1.0'
        ], [
            'emoji' => '🚞',
            'category' => 4,
            'name' => 'mountain railway',
            'version' => '1.0'
        ], [
            'emoji' => '🚋',
            'category' => 4,
            'name' => 'tram car',
            'version' => '1.0'
        ], [
            'emoji' => '🚌',
            'category' => 4,
            'name' => 'bus',
            'version' => '1.0'
        ], [
            'emoji' => '🚍',
            'category' => 4,
            'name' => 'oncoming bus',
            'version' => '1.0'
        ], [
            'emoji' => '🚎',
            'category' => 4,
            'name' => 'trolleybus',
            'version' => '1.0'
        ], [
            'emoji' => '🚐',
            'category' => 4,
            'name' => 'minibus',
            'version' => '1.0'
        ], [
            'emoji' => '🚑',
            'category' => 4,
            'name' => 'ambulance',
            'version' => '1.0'
        ], [
            'emoji' => '🚒',
            'category' => 4,
            'name' => 'fire engine',
            'version' => '1.0'
        ], [
            'emoji' => '🚓',
            'category' => 4,
            'name' => 'police car',
            'version' => '1.0'
        ], [
            'emoji' => '🚔',
            'category' => 4,
            'name' => 'oncoming police car',
            'version' => '1.0'
        ], [
            'emoji' => '🚕',
            'category' => 4,
            'name' => 'taxi',
            'version' => '1.0'
        ], [
            'emoji' => '🚖',
            'category' => 4,
            'name' => 'oncoming taxi',
            'version' => '1.0'
        ], [
            'emoji' => '🚗',
            'category' => 4,
            'name' => 'automobile',
            'version' => '1.0'
        ], [
            'emoji' => '🚘',
            'category' => 4,
            'name' => 'oncoming automobile',
            'version' => '1.0'
        ], [
            'emoji' => '🚙',
            'category' => 4,
            'name' => 'sport utility vehicle',
            'version' => '1.0'
        ], [
            'emoji' => '🛻',
            'category' => 4,
            'name' => 'pickup truck',
            'version' => '13.0'
        ], [
            'emoji' => '🚚',
            'category' => 4,
            'name' => 'delivery truck',
            'version' => '1.0'
        ], [
            'emoji' => '🚛',
            'category' => 4,
            'name' => 'articulated lorry',
            'version' => '1.0'
        ], [
            'emoji' => '🚜',
            'category' => 4,
            'name' => 'tractor',
            'version' => '1.0'
        ], [
            'emoji' => '🏎️',
            'category' => 4,
            'name' => 'racing car',
            'version' => '1.0'
        ], [
            'emoji' => '🏍️',
            'category' => 4,
            'name' => 'motorcycle',
            'version' => '1.0'
        ], [
            'emoji' => '🛵',
            'category' => 4,
            'name' => 'motor scooter',
            'version' => '3.0'
        ], [
            'emoji' => '🦽',
            'category' => 4,
            'name' => 'manual wheelchair',
            'version' => '12.0'
        ], [
            'emoji' => '🦼',
            'category' => 4,
            'name' => 'motorized wheelchair',
            'version' => '12.0'
        ], [
            'emoji' => '🛺',
            'category' => 4,
            'name' => 'auto rickshaw',
            'version' => '12.0'
        ], [
            'emoji' => '🚲',
            'category' => 4,
            'name' => 'bicycle',
            'version' => '1.0'
        ], [
            'emoji' => '🛴',
            'category' => 4,
            'name' => 'kick scooter',
            'version' => '3.0'
        ], [
            'emoji' => '🛹',
            'category' => 4,
            'name' => 'skateboard',
            'version' => '11.0'
        ], [
            'emoji' => '🛼',
            'category' => 4,
            'name' => 'roller skate',
            'version' => '13.0'
        ], [
            'emoji' => '🚏',
            'category' => 4,
            'name' => 'bus stop',
            'version' => '1.0'
        ], [
            'emoji' => '🛣️',
            'category' => 4,
            'name' => 'motorway',
            'version' => '1.0'
        ], [
            'emoji' => '🛤️',
            'category' => 4,
            'name' => 'railway track',
            'version' => '1.0'
        ], [
            'emoji' => '🛢️',
            'category' => 4,
            'name' => 'oil drum',
            'version' => '1.0'
        ], [
            'emoji' => '⛽',
            'category' => 4,
            'name' => 'fuel pump',
            'version' => '1.0'
        ], [
            'emoji' => '🚨',
            'category' => 4,
            'name' => 'police car light',
            'version' => '1.0'
        ], [
            'emoji' => '🚥',
            'category' => 4,
            'name' => 'horizontal traffic light',
            'version' => '1.0'
        ], [
            'emoji' => '🚦',
            'category' => 4,
            'name' => 'vertical traffic light',
            'version' => '1.0'
        ], [
            'emoji' => '🛑',
            'category' => 4,
            'name' => 'stop sign',
            'version' => '3.0'
        ], [
            'emoji' => '🚧',
            'category' => 4,
            'name' => 'construction',
            'version' => '1.0'
        ], [
            'emoji' => '⚓',
            'category' => 4,
            'name' => 'anchor',
            'version' => '1.0'
        ], [
            'emoji' => '⛵',
            'category' => 4,
            'name' => 'sailboat',
            'version' => '1.0'
        ], [
            'emoji' => '🛶',
            'category' => 4,
            'name' => 'canoe',
            'version' => '3.0'
        ], [
            'emoji' => '🚤',
            'category' => 4,
            'name' => 'speedboat',
            'version' => '1.0'
        ], [
            'emoji' => '🛳️',
            'category' => 4,
            'name' => 'passenger ship',
            'version' => '1.0'
        ], [
            'emoji' => '⛴️',
            'category' => 4,
            'name' => 'ferry',
            'version' => '1.0'
        ], [
            'emoji' => '🛥️',
            'category' => 4,
            'name' => 'motor boat',
            'version' => '1.0'
        ], [
            'emoji' => '🚢',
            'category' => 4,
            'name' => 'ship',
            'version' => '1.0'
        ], [
            'emoji' => '✈️',
            'category' => 4,
            'name' => 'airplane',
            'version' => '1.0'
        ], [
            'emoji' => '🛩️',
            'category' => 4,
            'name' => 'small airplane',
            'version' => '1.0'
        ], [
            'emoji' => '🛫',
            'category' => 4,
            'name' => 'airplane departure',
            'version' => '1.0'
        ], [
            'emoji' => '🛬',
            'category' => 4,
            'name' => 'airplane arrival',
            'version' => '1.0'
        ], [
            'emoji' => '🪂',
            'category' => 4,
            'name' => 'parachute',
            'version' => '12.0'
        ], [
            'emoji' => '💺',
            'category' => 4,
            'name' => 'seat',
            'version' => '1.0'
        ], [
            'emoji' => '🚁',
            'category' => 4,
            'name' => 'helicopter',
            'version' => '1.0'
        ], [
            'emoji' => '🚟',
            'category' => 4,
            'name' => 'suspension railway',
            'version' => '1.0'
        ], [
            'emoji' => '🚠',
            'category' => 4,
            'name' => 'mountain cableway',
            'version' => '1.0'
        ], [
            'emoji' => '🚡',
            'category' => 4,
            'name' => 'aerial tramway',
            'version' => '1.0'
        ], [
            'emoji' => '🛰️',
            'category' => 4,
            'name' => 'satellite',
            'version' => '1.0'
        ], [
            'emoji' => '🚀',
            'category' => 4,
            'name' => 'rocket',
            'version' => '1.0'
        ], [
            'emoji' => '🛸',
            'category' => 4,
            'name' => 'flying saucer',
            'version' => '5.0'
        ], [
            'emoji' => '🛎️',
            'category' => 4,
            'name' => 'bellhop bell',
            'version' => '1.0'
        ], [
            'emoji' => '🧳',
            'category' => 4,
            'name' => 'luggage',
            'version' => '11.0'
        ], [
            'emoji' => '⌛',
            'category' => 4,
            'name' => 'hourglass done',
            'version' => '1.0'
        ], [
            'emoji' => '⏳',
            'category' => 4,
            'name' => 'hourglass not done',
            'version' => '1.0'
        ], [
            'emoji' => '⌚',
            'category' => 4,
            'name' => 'watch',
            'version' => '1.0'
        ], [
            'emoji' => '⏰',
            'category' => 4,
            'name' => 'alarm clock',
            'version' => '1.0'
        ], [
            'emoji' => '⏱️',
            'category' => 4,
            'name' => 'stopwatch',
            'version' => '1.0'
        ], [
            'emoji' => '⏲️',
            'category' => 4,
            'name' => 'timer clock',
            'version' => '1.0'
        ], [
            'emoji' => '🕰️',
            'category' => 4,
            'name' => 'mantelpiece clock',
            'version' => '1.0'
        ], [
            'emoji' => '🕛',
            'category' => 4,
            'name' => 'twelve o’clock',
            'version' => '1.0'
        ], [
            'emoji' => '🕧',
            'category' => 4,
            'name' => 'twelve-thirty',
            'version' => '1.0'
        ], [
            'emoji' => '🕐',
            'category' => 4,
            'name' => 'one o’clock',
            'version' => '1.0'
        ], [
            'emoji' => '🕜',
            'category' => 4,
            'name' => 'one-thirty',
            'version' => '1.0'
        ], [
            'emoji' => '🕑',
            'category' => 4,
            'name' => 'two o’clock',
            'version' => '1.0'
        ], [
            'emoji' => '🕝',
            'category' => 4,
            'name' => 'two-thirty',
            'version' => '1.0'
        ], [
            'emoji' => '🕒',
            'category' => 4,
            'name' => 'three o’clock',
            'version' => '1.0'
        ], [
            'emoji' => '🕞',
            'category' => 4,
            'name' => 'three-thirty',
            'version' => '1.0'
        ], [
            'emoji' => '🕓',
            'category' => 4,
            'name' => 'four o’clock',
            'version' => '1.0'
        ], [
            'emoji' => '🕟',
            'category' => 4,
            'name' => 'four-thirty',
            'version' => '1.0'
        ], [
            'emoji' => '🕔',
            'category' => 4,
            'name' => 'five o’clock',
            'version' => '1.0'
        ], [
            'emoji' => '🕠',
            'category' => 4,
            'name' => 'five-thirty',
            'version' => '1.0'
        ], [
            'emoji' => '🕕',
            'category' => 4,
            'name' => 'six o’clock',
            'version' => '1.0'
        ], [
            'emoji' => '🕡',
            'category' => 4,
            'name' => 'six-thirty',
            'version' => '1.0'
        ], [
            'emoji' => '🕖',
            'category' => 4,
            'name' => 'seven o’clock',
            'version' => '1.0'
        ], [
            'emoji' => '🕢',
            'category' => 4,
            'name' => 'seven-thirty',
            'version' => '1.0'
        ], [
            'emoji' => '🕗',
            'category' => 4,
            'name' => 'eight o’clock',
            'version' => '1.0'
        ], [
            'emoji' => '🕣',
            'category' => 4,
            'name' => 'eight-thirty',
            'version' => '1.0'
        ], [
            'emoji' => '🕘',
            'category' => 4,
            'name' => 'nine o’clock',
            'version' => '1.0'
        ], [
            'emoji' => '🕤',
            'category' => 4,
            'name' => 'nine-thirty',
            'version' => '1.0'
        ], [
            'emoji' => '🕙',
            'category' => 4,
            'name' => 'ten o’clock',
            'version' => '1.0'
        ], [
            'emoji' => '🕥',
            'category' => 4,
            'name' => 'ten-thirty',
            'version' => '1.0'
        ], [
            'emoji' => '🕚',
            'category' => 4,
            'name' => 'eleven o’clock',
            'version' => '1.0'
        ], [
            'emoji' => '🕦',
            'category' => 4,
            'name' => 'eleven-thirty',
            'version' => '1.0'
        ], [
            'emoji' => '🌑',
            'category' => 4,
            'name' => 'new moon',
            'version' => '1.0'
        ], [
            'emoji' => '🌒',
            'category' => 4,
            'name' => 'waxing crescent moon',
            'version' => '1.0'
        ], [
            'emoji' => '🌓',
            'category' => 4,
            'name' => 'first quarter moon',
            'version' => '1.0'
        ], [
            'emoji' => '🌔',
            'category' => 4,
            'name' => 'waxing gibbous moon',
            'version' => '1.0'
        ], [
            'emoji' => '🌕',
            'category' => 4,
            'name' => 'full moon',
            'version' => '1.0'
        ], [
            'emoji' => '🌖',
            'category' => 4,
            'name' => 'waning gibbous moon',
            'version' => '1.0'
        ], [
            'emoji' => '🌗',
            'category' => 4,
            'name' => 'last quarter moon',
            'version' => '1.0'
        ], [
            'emoji' => '🌘',
            'category' => 4,
            'name' => 'waning crescent moon',
            'version' => '1.0'
        ], [
            'emoji' => '🌙',
            'category' => 4,
            'name' => 'crescent moon',
            'version' => '1.0'
        ], [
            'emoji' => '🌚',
            'category' => 4,
            'name' => 'new moon face',
            'version' => '1.0'
        ], [
            'emoji' => '🌛',
            'category' => 4,
            'name' => 'first quarter moon face',
            'version' => '1.0'
        ], [
            'emoji' => '🌜',
            'category' => 4,
            'name' => 'last quarter moon face',
            'version' => '1.0'
        ], [
            'emoji' => '🌡️',
            'category' => 4,
            'name' => 'thermometer',
            'version' => '1.0'
        ], [
            'emoji' => '☀️',
            'category' => 4,
            'name' => 'sun',
            'version' => '1.0'
        ], [
            'emoji' => '🌝',
            'category' => 4,
            'name' => 'full moon face',
            'version' => '1.0'
        ], [
            'emoji' => '🌞',
            'category' => 4,
            'name' => 'sun with face',
            'version' => '1.0'
        ], [
            'emoji' => '🪐',
            'category' => 4,
            'name' => 'ringed planet',
            'version' => '12.0'
        ], [
            'emoji' => '⭐',
            'category' => 4,
            'name' => 'star',
            'version' => '1.0'
        ], [
            'emoji' => '🌟',
            'category' => 4,
            'name' => 'glowing star',
            'version' => '1.0'
        ], [
            'emoji' => '🌠',
            'category' => 4,
            'name' => 'shooting star',
            'version' => '1.0'
        ], [
            'emoji' => '🌌',
            'category' => 4,
            'name' => 'milky way',
            'version' => '1.0'
        ], [
            'emoji' => '☁️',
            'category' => 4,
            'name' => 'cloud',
            'version' => '1.0'
        ], [
            'emoji' => '⛅',
            'category' => 4,
            'name' => 'sun behind cloud',
            'version' => '1.0'
        ], [
            'emoji' => '⛈️',
            'category' => 4,
            'name' => 'cloud with lightning and rain',
            'version' => '1.0'
        ], [
            'emoji' => '🌤️',
            'category' => 4,
            'name' => 'sun behind small cloud',
            'version' => '1.0'
        ], [
            'emoji' => '🌥️',
            'category' => 4,
            'name' => 'sun behind large cloud',
            'version' => '1.0'
        ], [
            'emoji' => '🌦️',
            'category' => 4,
            'name' => 'sun behind rain cloud',
            'version' => '1.0'
        ], [
            'emoji' => '🌧️',
            'category' => 4,
            'name' => 'cloud with rain',
            'version' => '1.0'
        ], [
            'emoji' => '🌨️',
            'category' => 4,
            'name' => 'cloud with snow',
            'version' => '1.0'
        ], [
            'emoji' => '🌩️',
            'category' => 4,
            'name' => 'cloud with lightning',
            'version' => '1.0'
        ], [
            'emoji' => '🌪️',
            'category' => 4,
            'name' => 'tornado',
            'version' => '1.0'
        ], [
            'emoji' => '🌫️',
            'category' => 4,
            'name' => 'fog',
            'version' => '1.0'
        ], [
            'emoji' => '🌬️',
            'category' => 4,
            'name' => 'wind face',
            'version' => '1.0'
        ], [
            'emoji' => '🌀',
            'category' => 4,
            'name' => 'cyclone',
            'version' => '1.0'
        ], [
            'emoji' => '🌈',
            'category' => 4,
            'name' => 'rainbow',
            'version' => '1.0'
        ], [
            'emoji' => '🌂',
            'category' => 4,
            'name' => 'closed umbrella',
            'version' => '1.0'
        ], [
            'emoji' => '☂️',
            'category' => 4,
            'name' => 'umbrella',
            'version' => '1.0'
        ], [
            'emoji' => '☔',
            'category' => 4,
            'name' => 'umbrella with rain drops',
            'version' => '1.0'
        ], [
            'emoji' => '⛱️',
            'category' => 4,
            'name' => 'umbrella on ground',
            'version' => '1.0'
        ], [
            'emoji' => '⚡',
            'category' => 4,
            'name' => 'high voltage',
            'version' => '1.0'
        ], [
            'emoji' => '❄️',
            'category' => 4,
            'name' => 'snowflake',
            'version' => '1.0'
        ], [
            'emoji' => '☃️',
            'category' => 4,
            'name' => 'snowman',
            'version' => '1.0'
        ], [
            'emoji' => '⛄',
            'category' => 4,
            'name' => 'snowman without snow',
            'version' => '1.0'
        ], [
            'emoji' => '☄️',
            'category' => 4,
            'name' => 'comet',
            'version' => '1.0'
        ], [
            'emoji' => '🔥',
            'category' => 4,
            'name' => 'fire',
            'version' => '1.0'
        ], [
            'emoji' => '💧',
            'category' => 4,
            'name' => 'droplet',
            'version' => '1.0'
        ], [
            'emoji' => '🌊',
            'category' => 4,
            'name' => 'water wave',
            'version' => '1.0'
        ], [
            'emoji' => '🎃',
            'category' => 5,
            'name' => 'jack-o-lantern',
            'version' => '1.0'
        ], [
            'emoji' => '🎄',
            'category' => 5,
            'name' => 'Christmas tree',
            'version' => '1.0'
        ], [
            'emoji' => '🎆',
            'category' => 5,
            'name' => 'fireworks',
            'version' => '1.0'
        ], [
            'emoji' => '🎇',
            'category' => 5,
            'name' => 'sparkler',
            'version' => '1.0'
        ], [
            'emoji' => '🧨',
            'category' => 5,
            'name' => 'firecracker',
            'version' => '11.0'
        ], [
            'emoji' => '✨',
            'category' => 5,
            'name' => 'sparkles',
            'version' => '1.0'
        ], [
            'emoji' => '🎈',
            'category' => 5,
            'name' => 'balloon',
            'version' => '1.0'
        ], [
            'emoji' => '🎉',
            'category' => 5,
            'name' => 'party popper',
            'version' => '1.0'
        ], [
            'emoji' => '🎊',
            'category' => 5,
            'name' => 'confetti ball',
            'version' => '1.0'
        ], [
            'emoji' => '🎋',
            'category' => 5,
            'name' => 'tanabata tree',
            'version' => '1.0'
        ], [
            'emoji' => '🎍',
            'category' => 5,
            'name' => 'pine decoration',
            'version' => '1.0'
        ], [
            'emoji' => '🎎',
            'category' => 5,
            'name' => 'Japanese dolls',
            'version' => '1.0'
        ], [
            'emoji' => '🎏',
            'category' => 5,
            'name' => 'carp streamer',
            'version' => '1.0'
        ], [
            'emoji' => '🎐',
            'category' => 5,
            'name' => 'wind chime',
            'version' => '1.0'
        ], [
            'emoji' => '🎑',
            'category' => 5,
            'name' => 'moon viewing ceremony',
            'version' => '1.0'
        ], [
            'emoji' => '🧧',
            'category' => 5,
            'name' => 'red envelope',
            'version' => '11.0'
        ], [
            'emoji' => '🎀',
            'category' => 5,
            'name' => 'ribbon',
            'version' => '1.0'
        ], [
            'emoji' => '🎁',
            'category' => 5,
            'name' => 'wrapped gift',
            'version' => '1.0'
        ], [
            'emoji' => '🎗️',
            'category' => 5,
            'name' => 'reminder ribbon',
            'version' => '1.0'
        ], [
            'emoji' => '🎟️',
            'category' => 5,
            'name' => 'admission tickets',
            'version' => '1.0'
        ], [
            'emoji' => '🎫',
            'category' => 5,
            'name' => 'ticket',
            'version' => '1.0'
        ], [
            'emoji' => '🎖️',
            'category' => 5,
            'name' => 'military medal',
            'version' => '1.0'
        ], [
            'emoji' => '🏆',
            'category' => 5,
            'name' => 'trophy',
            'version' => '1.0'
        ], [
            'emoji' => '🏅',
            'category' => 5,
            'name' => 'sports medal',
            'version' => '1.0'
        ], [
            'emoji' => '🥇',
            'category' => 5,
            'name' => '1st place medal',
            'version' => '3.0'
        ], [
            'emoji' => '🥈',
            'category' => 5,
            'name' => '2nd place medal',
            'version' => '3.0'
        ], [
            'emoji' => '🥉',
            'category' => 5,
            'name' => '3rd place medal',
            'version' => '3.0'
        ], [
            'emoji' => '⚽',
            'category' => 5,
            'name' => 'soccer ball',
            'version' => '1.0'
        ], [
            'emoji' => '⚾',
            'category' => 5,
            'name' => 'baseball',
            'version' => '1.0'
        ], [
            'emoji' => '🥎',
            'category' => 5,
            'name' => 'softball',
            'version' => '11.0'
        ], [
            'emoji' => '🏀',
            'category' => 5,
            'name' => 'basketball',
            'version' => '1.0'
        ], [
            'emoji' => '🏐',
            'category' => 5,
            'name' => 'volleyball',
            'version' => '1.0'
        ], [
            'emoji' => '🏈',
            'category' => 5,
            'name' => 'american football',
            'version' => '1.0'
        ], [
            'emoji' => '🏉',
            'category' => 5,
            'name' => 'rugby football',
            'version' => '1.0'
        ], [
            'emoji' => '🎾',
            'category' => 5,
            'name' => 'tennis',
            'version' => '1.0'
        ], [
            'emoji' => '🥏',
            'category' => 5,
            'name' => 'flying disc',
            'version' => '11.0'
        ], [
            'emoji' => '🎳',
            'category' => 5,
            'name' => 'bowling',
            'version' => '1.0'
        ], [
            'emoji' => '🏏',
            'category' => 5,
            'name' => 'cricket game',
            'version' => '1.0'
        ], [
            'emoji' => '🏑',
            'category' => 5,
            'name' => 'field hockey',
            'version' => '1.0'
        ], [
            'emoji' => '🏒',
            'category' => 5,
            'name' => 'ice hockey',
            'version' => '1.0'
        ], [
            'emoji' => '🥍',
            'category' => 5,
            'name' => 'lacrosse',
            'version' => '11.0'
        ], [
            'emoji' => '🏓',
            'category' => 5,
            'name' => 'ping pong',
            'version' => '1.0'
        ], [
            'emoji' => '🏸',
            'category' => 5,
            'name' => 'badminton',
            'version' => '1.0'
        ], [
            'emoji' => '🥊',
            'category' => 5,
            'name' => 'boxing glove',
            'version' => '3.0'
        ], [
            'emoji' => '🥋',
            'category' => 5,
            'name' => 'martial arts uniform',
            'version' => '3.0'
        ], [
            'emoji' => '🥅',
            'category' => 5,
            'name' => 'goal net',
            'version' => '3.0'
        ], [
            'emoji' => '⛳',
            'category' => 5,
            'name' => 'flag in hole',
            'version' => '1.0'
        ], [
            'emoji' => '⛸️',
            'category' => 5,
            'name' => 'ice skate',
            'version' => '1.0'
        ], [
            'emoji' => '🎣',
            'category' => 5,
            'name' => 'fishing pole',
            'version' => '1.0'
        ], [
            'emoji' => '🤿',
            'category' => 5,
            'name' => 'diving mask',
            'version' => '12.0'
        ], [
            'emoji' => '🎽',
            'category' => 5,
            'name' => 'running shirt',
            'version' => '1.0'
        ], [
            'emoji' => '🎿',
            'category' => 5,
            'name' => 'skis',
            'version' => '1.0'
        ], [
            'emoji' => '🛷',
            'category' => 5,
            'name' => 'sled',
            'version' => '5.0'
        ], [
            'emoji' => '🥌',
            'category' => 5,
            'name' => 'curling stone',
            'version' => '5.0'
        ], [
            'emoji' => '🎯',
            'category' => 5,
            'name' => 'direct hit',
            'version' => '1.0'
        ], [
            'emoji' => '🪀',
            'category' => 5,
            'name' => 'yo-yo',
            'version' => '12.0'
        ], [
            'emoji' => '🪁',
            'category' => 5,
            'name' => 'kite',
            'version' => '12.0'
        ], [
            'emoji' => '🎱',
            'category' => 5,
            'name' => 'pool 8 ball',
            'version' => '1.0'
        ], [
            'emoji' => '🔮',
            'category' => 5,
            'name' => 'crystal ball',
            'version' => '1.0'
        ], [
            'emoji' => '🪄',
            'category' => 5,
            'name' => 'magic wand',
            'version' => '13.0'
        ], [
            'emoji' => '🧿',
            'category' => 5,
            'name' => 'nazar amulet',
            'version' => '11.0'
        ], [
            'emoji' => '🎮',
            'category' => 5,
            'name' => 'video game',
            'version' => '1.0'
        ], [
            'emoji' => '🕹️',
            'category' => 5,
            'name' => 'joystick',
            'version' => '1.0'
        ], [
            'emoji' => '🎰',
            'category' => 5,
            'name' => 'slot machine',
            'version' => '1.0'
        ], [
            'emoji' => '🎲',
            'category' => 5,
            'name' => 'game die',
            'version' => '1.0'
        ], [
            'emoji' => '🧩',
            'category' => 5,
            'name' => 'puzzle piece',
            'version' => '11.0'
        ], [
            'emoji' => '🧸',
            'category' => 5,
            'name' => 'teddy bear',
            'version' => '11.0'
        ], [
            'emoji' => '🪅',
            'category' => 5,
            'name' => 'piñata',
            'version' => '13.0'
        ], [
            'emoji' => '🪆',
            'category' => 5,
            'name' => 'nesting dolls',
            'version' => '13.0'
        ], [
            'emoji' => '♠️',
            'category' => 5,
            'name' => 'spade suit',
            'version' => '1.0'
        ], [
            'emoji' => '♥️',
            'category' => 5,
            'name' => 'heart suit',
            'version' => '1.0'
        ], [
            'emoji' => '♦️',
            'category' => 5,
            'name' => 'diamond suit',
            'version' => '1.0'
        ], [
            'emoji' => '♣️',
            'category' => 5,
            'name' => 'club suit',
            'version' => '1.0'
        ], [
            'emoji' => '♟️',
            'category' => 5,
            'name' => 'chess pawn',
            'version' => '11.0'
        ], [
            'emoji' => '🃏',
            'category' => 5,
            'name' => 'joker',
            'version' => '1.0'
        ], [
            'emoji' => '🀄',
            'category' => 5,
            'name' => 'mahjong red dragon',
            'version' => '1.0'
        ], [
            'emoji' => '🎴',
            'category' => 5,
            'name' => 'flower playing cards',
            'version' => '1.0'
        ], [
            'emoji' => '🎭',
            'category' => 5,
            'name' => 'performing arts',
            'version' => '1.0'
        ], [
            'emoji' => '🖼️',
            'category' => 5,
            'name' => 'framed picture',
            'version' => '1.0'
        ], [
            'emoji' => '🎨',
            'category' => 5,
            'name' => 'artist palette',
            'version' => '1.0'
        ], [
            'emoji' => '🧵',
            'category' => 5,
            'name' => 'thread',
            'version' => '11.0'
        ], [
            'emoji' => '🪡',
            'category' => 5,
            'name' => 'sewing needle',
            'version' => '13.0'
        ], [
            'emoji' => '🧶',
            'category' => 5,
            'name' => 'yarn',
            'version' => '11.0'
        ], [
            'emoji' => '🪢',
            'category' => 5,
            'name' => 'knot',
            'version' => '13.0'
        ], [
            'emoji' => '👓',
            'category' => 6,
            'name' => 'glasses',
            'version' => '1.0'
        ], [
            'emoji' => '🕶️',
            'category' => 6,
            'name' => 'sunglasses',
            'version' => '1.0'
        ], [
            'emoji' => '🥽',
            'category' => 6,
            'name' => 'goggles',
            'version' => '11.0'
        ], [
            'emoji' => '🥼',
            'category' => 6,
            'name' => 'lab coat',
            'version' => '11.0'
        ], [
            'emoji' => '🦺',
            'category' => 6,
            'name' => 'safety vest',
            'version' => '12.0'
        ], [
            'emoji' => '👔',
            'category' => 6,
            'name' => 'necktie',
            'version' => '1.0'
        ], [
            'emoji' => '👕',
            'category' => 6,
            'name' => 't-shirt',
            'version' => '1.0'
        ], [
            'emoji' => '👖',
            'category' => 6,
            'name' => 'jeans',
            'version' => '1.0'
        ], [
            'emoji' => '🧣',
            'category' => 6,
            'name' => 'scarf',
            'version' => '5.0'
        ], [
            'emoji' => '🧤',
            'category' => 6,
            'name' => 'gloves',
            'version' => '5.0'
        ], [
            'emoji' => '🧥',
            'category' => 6,
            'name' => 'coat',
            'version' => '5.0'
        ], [
            'emoji' => '🧦',
            'category' => 6,
            'name' => 'socks',
            'version' => '5.0'
        ], [
            'emoji' => '👗',
            'category' => 6,
            'name' => 'dress',
            'version' => '1.0'
        ], [
            'emoji' => '👘',
            'category' => 6,
            'name' => 'kimono',
            'version' => '1.0'
        ], [
            'emoji' => '🥻',
            'category' => 6,
            'name' => 'sari',
            'version' => '12.0'
        ], [
            'emoji' => '🩱',
            'category' => 6,
            'name' => 'one-piece swimsuit',
            'version' => '12.0'
        ], [
            'emoji' => '🩲',
            'category' => 6,
            'name' => 'briefs',
            'version' => '12.0'
        ], [
            'emoji' => '🩳',
            'category' => 6,
            'name' => 'shorts',
            'version' => '12.0'
        ], [
            'emoji' => '👙',
            'category' => 6,
            'name' => 'bikini',
            'version' => '1.0'
        ], [
            'emoji' => '👚',
            'category' => 6,
            'name' => 'woman’s clothes',
            'version' => '1.0'
        ], [
            'emoji' => '👛',
            'category' => 6,
            'name' => 'purse',
            'version' => '1.0'
        ], [
            'emoji' => '👜',
            'category' => 6,
            'name' => 'handbag',
            'version' => '1.0'
        ], [
            'emoji' => '👝',
            'category' => 6,
            'name' => 'clutch bag',
            'version' => '1.0'
        ], [
            'emoji' => '🛍️',
            'category' => 6,
            'name' => 'shopping bags',
            'version' => '1.0'
        ], [
            'emoji' => '🎒',
            'category' => 6,
            'name' => 'backpack',
            'version' => '1.0'
        ], [
            'emoji' => '🩴',
            'category' => 6,
            'name' => 'thong sandal',
            'version' => '13.0'
        ], [
            'emoji' => '👞',
            'category' => 6,
            'name' => 'man’s shoe',
            'version' => '1.0'
        ], [
            'emoji' => '👟',
            'category' => 6,
            'name' => 'running shoe',
            'version' => '1.0'
        ], [
            'emoji' => '🥾',
            'category' => 6,
            'name' => 'hiking boot',
            'version' => '11.0'
        ], [
            'emoji' => '🥿',
            'category' => 6,
            'name' => 'flat shoe',
            'version' => '11.0'
        ], [
            'emoji' => '👠',
            'category' => 6,
            'name' => 'high-heeled shoe',
            'version' => '1.0'
        ], [
            'emoji' => '👡',
            'category' => 6,
            'name' => 'woman’s sandal',
            'version' => '1.0'
        ], [
            'emoji' => '🩰',
            'category' => 6,
            'name' => 'ballet shoes',
            'version' => '12.0'
        ], [
            'emoji' => '👢',
            'category' => 6,
            'name' => 'woman’s boot',
            'version' => '1.0'
        ], [
            'emoji' => '👑',
            'category' => 6,
            'name' => 'crown',
            'version' => '1.0'
        ], [
            'emoji' => '👒',
            'category' => 6,
            'name' => 'woman’s hat',
            'version' => '1.0'
        ], [
            'emoji' => '🎩',
            'category' => 6,
            'name' => 'top hat',
            'version' => '1.0'
        ], [
            'emoji' => '🎓',
            'category' => 6,
            'name' => 'graduation cap',
            'version' => '1.0'
        ], [
            'emoji' => '🧢',
            'category' => 6,
            'name' => 'billed cap',
            'version' => '5.0'
        ], [
            'emoji' => '🪖',
            'category' => 6,
            'name' => 'military helmet',
            'version' => '13.0'
        ], [
            'emoji' => '⛑️',
            'category' => 6,
            'name' => 'rescue worker’s helmet',
            'version' => '1.0'
        ], [
            'emoji' => '📿',
            'category' => 6,
            'name' => 'prayer beads',
            'version' => '1.0'
        ], [
            'emoji' => '💄',
            'category' => 6,
            'name' => 'lipstick',
            'version' => '1.0'
        ], [
            'emoji' => '💍',
            'category' => 6,
            'name' => 'ring',
            'version' => '1.0'
        ], [
            'emoji' => '💎',
            'category' => 6,
            'name' => 'gem stone',
            'version' => '1.0'
        ], [
            'emoji' => '🔇',
            'category' => 6,
            'name' => 'muted speaker',
            'version' => '1.0'
        ], [
            'emoji' => '🔈',
            'category' => 6,
            'name' => 'speaker low volume',
            'version' => '1.0'
        ], [
            'emoji' => '🔉',
            'category' => 6,
            'name' => 'speaker medium volume',
            'version' => '1.0'
        ], [
            'emoji' => '🔊',
            'category' => 6,
            'name' => 'speaker high volume',
            'version' => '1.0'
        ], [
            'emoji' => '📢',
            'category' => 6,
            'name' => 'loudspeaker',
            'version' => '1.0'
        ], [
            'emoji' => '📣',
            'category' => 6,
            'name' => 'megaphone',
            'version' => '1.0'
        ], [
            'emoji' => '📯',
            'category' => 6,
            'name' => 'postal horn',
            'version' => '1.0'
        ], [
            'emoji' => '🔔',
            'category' => 6,
            'name' => 'bell',
            'version' => '1.0'
        ], [
            'emoji' => '🔕',
            'category' => 6,
            'name' => 'bell with slash',
            'version' => '1.0'
        ], [
            'emoji' => '🎼',
            'category' => 6,
            'name' => 'musical score',
            'version' => '1.0'
        ], [
            'emoji' => '🎵',
            'category' => 6,
            'name' => 'musical note',
            'version' => '1.0'
        ], [
            'emoji' => '🎶',
            'category' => 6,
            'name' => 'musical notes',
            'version' => '1.0'
        ], [
            'emoji' => '🎙️',
            'category' => 6,
            'name' => 'studio microphone',
            'version' => '1.0'
        ], [
            'emoji' => '🎚️',
            'category' => 6,
            'name' => 'level slider',
            'version' => '1.0'
        ], [
            'emoji' => '🎛️',
            'category' => 6,
            'name' => 'control knobs',
            'version' => '1.0'
        ], [
            'emoji' => '🎤',
            'category' => 6,
            'name' => 'microphone',
            'version' => '1.0'
        ], [
            'emoji' => '🎧',
            'category' => 6,
            'name' => 'headphone',
            'version' => '1.0'
        ], [
            'emoji' => '📻',
            'category' => 6,
            'name' => 'radio',
            'version' => '1.0'
        ], [
            'emoji' => '🎷',
            'category' => 6,
            'name' => 'saxophone',
            'version' => '1.0'
        ], [
            'emoji' => '🪗',
            'category' => 6,
            'name' => 'accordion',
            'version' => '13.0'
        ], [
            'emoji' => '🎸',
            'category' => 6,
            'name' => 'guitar',
            'version' => '1.0'
        ], [
            'emoji' => '🎹',
            'category' => 6,
            'name' => 'musical keyboard',
            'version' => '1.0'
        ], [
            'emoji' => '🎺',
            'category' => 6,
            'name' => 'trumpet',
            'version' => '1.0'
        ], [
            'emoji' => '🎻',
            'category' => 6,
            'name' => 'violin',
            'version' => '1.0'
        ], [
            'emoji' => '🪕',
            'category' => 6,
            'name' => 'banjo',
            'version' => '12.0'
        ], [
            'emoji' => '🥁',
            'category' => 6,
            'name' => 'drum',
            'version' => '3.0'
        ], [
            'emoji' => '🪘',
            'category' => 6,
            'name' => 'long drum',
            'version' => '13.0'
        ], [
            'emoji' => '📱',
            'category' => 6,
            'name' => 'mobile phone',
            'version' => '1.0'
        ], [
            'emoji' => '📲',
            'category' => 6,
            'name' => 'mobile phone with arrow',
            'version' => '1.0'
        ], [
            'emoji' => '☎️',
            'category' => 6,
            'name' => 'telephone',
            'version' => '1.0'
        ], [
            'emoji' => '📞',
            'category' => 6,
            'name' => 'telephone receiver',
            'version' => '1.0'
        ], [
            'emoji' => '📟',
            'category' => 6,
            'name' => 'pager',
            'version' => '1.0'
        ], [
            'emoji' => '📠',
            'category' => 6,
            'name' => 'fax machine',
            'version' => '1.0'
        ], [
            'emoji' => '🔋',
            'category' => 6,
            'name' => 'battery',
            'version' => '1.0'
        ], [
            'emoji' => '🔌',
            'category' => 6,
            'name' => 'electric plug',
            'version' => '1.0'
        ], [
            'emoji' => '💻',
            'category' => 6,
            'name' => 'laptop',
            'version' => '1.0'
        ], [
            'emoji' => '🖥️',
            'category' => 6,
            'name' => 'desktop computer',
            'version' => '1.0'
        ], [
            'emoji' => '🖨️',
            'category' => 6,
            'name' => 'printer',
            'version' => '1.0'
        ], [
            'emoji' => '⌨️',
            'category' => 6,
            'name' => 'keyboard',
            'version' => '1.0'
        ], [
            'emoji' => '🖱️',
            'category' => 6,
            'name' => 'computer mouse',
            'version' => '1.0'
        ], [
            'emoji' => '🖲️',
            'category' => 6,
            'name' => 'trackball',
            'version' => '1.0'
        ], [
            'emoji' => '💽',
            'category' => 6,
            'name' => 'computer disk',
            'version' => '1.0'
        ], [
            'emoji' => '💾',
            'category' => 6,
            'name' => 'floppy disk',
            'version' => '1.0'
        ], [
            'emoji' => '💿',
            'category' => 6,
            'name' => 'optical disk',
            'version' => '1.0'
        ], [
            'emoji' => '📀',
            'category' => 6,
            'name' => 'dvd',
            'version' => '1.0'
        ], [
            'emoji' => '🧮',
            'category' => 6,
            'name' => 'abacus',
            'version' => '11.0'
        ], [
            'emoji' => '🎥',
            'category' => 6,
            'name' => 'movie camera',
            'version' => '1.0'
        ], [
            'emoji' => '🎞️',
            'category' => 6,
            'name' => 'film frames',
            'version' => '1.0'
        ], [
            'emoji' => '📽️',
            'category' => 6,
            'name' => 'film projector',
            'version' => '1.0'
        ], [
            'emoji' => '🎬',
            'category' => 6,
            'name' => 'clapper board',
            'version' => '1.0'
        ], [
            'emoji' => '📺',
            'category' => 6,
            'name' => 'television',
            'version' => '1.0'
        ], [
            'emoji' => '📷',
            'category' => 6,
            'name' => 'camera',
            'version' => '1.0'
        ], [
            'emoji' => '📸',
            'category' => 6,
            'name' => 'camera with flash',
            'version' => '1.0'
        ], [
            'emoji' => '📹',
            'category' => 6,
            'name' => 'video camera',
            'version' => '1.0'
        ], [
            'emoji' => '📼',
            'category' => 6,
            'name' => 'videocassette',
            'version' => '1.0'
        ], [
            'emoji' => '🔍',
            'category' => 6,
            'name' => 'magnifying glass tilted left',
            'version' => '1.0'
        ], [
            'emoji' => '🔎',
            'category' => 6,
            'name' => 'magnifying glass tilted right',
            'version' => '1.0'
        ], [
            'emoji' => '🕯️',
            'category' => 6,
            'name' => 'candle',
            'version' => '1.0'
        ], [
            'emoji' => '💡',
            'category' => 6,
            'name' => 'light bulb',
            'version' => '1.0'
        ], [
            'emoji' => '🔦',
            'category' => 6,
            'name' => 'flashlight',
            'version' => '1.0'
        ], [
            'emoji' => '🏮',
            'category' => 6,
            'name' => 'red paper lantern',
            'version' => '1.0'
        ], [
            'emoji' => '🪔',
            'category' => 6,
            'name' => 'diya lamp',
            'version' => '12.0'
        ], [
            'emoji' => '📔',
            'category' => 6,
            'name' => 'notebook with decorative cover',
            'version' => '1.0'
        ], [
            'emoji' => '📕',
            'category' => 6,
            'name' => 'closed book',
            'version' => '1.0'
        ], [
            'emoji' => '📖',
            'category' => 6,
            'name' => 'open book',
            'version' => '1.0'
        ], [
            'emoji' => '📗',
            'category' => 6,
            'name' => 'green book',
            'version' => '1.0'
        ], [
            'emoji' => '📘',
            'category' => 6,
            'name' => 'blue book',
            'version' => '1.0'
        ], [
            'emoji' => '📙',
            'category' => 6,
            'name' => 'orange book',
            'version' => '1.0'
        ], [
            'emoji' => '📚',
            'category' => 6,
            'name' => 'books',
            'version' => '1.0'
        ], [
            'emoji' => '📓',
            'category' => 6,
            'name' => 'notebook',
            'version' => '1.0'
        ], [
            'emoji' => '📒',
            'category' => 6,
            'name' => 'ledger',
            'version' => '1.0'
        ], [
            'emoji' => '📃',
            'category' => 6,
            'name' => 'page with curl',
            'version' => '1.0'
        ], [
            'emoji' => '📜',
            'category' => 6,
            'name' => 'scroll',
            'version' => '1.0'
        ], [
            'emoji' => '📄',
            'category' => 6,
            'name' => 'page facing up',
            'version' => '1.0'
        ], [
            'emoji' => '📰',
            'category' => 6,
            'name' => 'newspaper',
            'version' => '1.0'
        ], [
            'emoji' => '🗞️',
            'category' => 6,
            'name' => 'rolled-up newspaper',
            'version' => '1.0'
        ], [
            'emoji' => '📑',
            'category' => 6,
            'name' => 'bookmark tabs',
            'version' => '1.0'
        ], [
            'emoji' => '🔖',
            'category' => 6,
            'name' => 'bookmark',
            'version' => '1.0'
        ], [
            'emoji' => '🏷️',
            'category' => 6,
            'name' => 'label',
            'version' => '1.0'
        ], [
            'emoji' => '💰',
            'category' => 6,
            'name' => 'money bag',
            'version' => '1.0'
        ], [
            'emoji' => '🪙',
            'category' => 6,
            'name' => 'coin',
            'version' => '13.0'
        ], [
            'emoji' => '💴',
            'category' => 6,
            'name' => 'yen banknote',
            'version' => '1.0'
        ], [
            'emoji' => '💵',
            'category' => 6,
            'name' => 'dollar banknote',
            'version' => '1.0'
        ], [
            'emoji' => '💶',
            'category' => 6,
            'name' => 'euro banknote',
            'version' => '1.0'
        ], [
            'emoji' => '💷',
            'category' => 6,
            'name' => 'pound banknote',
            'version' => '1.0'
        ], [
            'emoji' => '💸',
            'category' => 6,
            'name' => 'money with wings',
            'version' => '1.0'
        ], [
            'emoji' => '💳',
            'category' => 6,
            'name' => 'credit card',
            'version' => '1.0'
        ], [
            'emoji' => '🧾',
            'category' => 6,
            'name' => 'receipt',
            'version' => '11.0'
        ], [
            'emoji' => '💹',
            'category' => 6,
            'name' => 'chart increasing with yen',
            'version' => '1.0'
        ], [
            'emoji' => '✉️',
            'category' => 6,
            'name' => 'envelope',
            'version' => '1.0'
        ], [
            'emoji' => '📧',
            'category' => 6,
            'name' => 'e-mail',
            'version' => '1.0'
        ], [
            'emoji' => '📨',
            'category' => 6,
            'name' => 'incoming envelope',
            'version' => '1.0'
        ], [
            'emoji' => '📩',
            'category' => 6,
            'name' => 'envelope with arrow',
            'version' => '1.0'
        ], [
            'emoji' => '📤',
            'category' => 6,
            'name' => 'outbox tray',
            'version' => '1.0'
        ], [
            'emoji' => '📥',
            'category' => 6,
            'name' => 'inbox tray',
            'version' => '1.0'
        ], [
            'emoji' => '📦',
            'category' => 6,
            'name' => 'package',
            'version' => '1.0'
        ], [
            'emoji' => '📫',
            'category' => 6,
            'name' => 'closed mailbox with raised flag',
            'version' => '1.0'
        ], [
            'emoji' => '📪',
            'category' => 6,
            'name' => 'closed mailbox with lowered flag',
            'version' => '1.0'
        ], [
            'emoji' => '📬',
            'category' => 6,
            'name' => 'open mailbox with raised flag',
            'version' => '1.0'
        ], [
            'emoji' => '📭',
            'category' => 6,
            'name' => 'open mailbox with lowered flag',
            'version' => '1.0'
        ], [
            'emoji' => '📮',
            'category' => 6,
            'name' => 'postbox',
            'version' => '1.0'
        ], [
            'emoji' => '🗳️',
            'category' => 6,
            'name' => 'ballot box with ballot',
            'version' => '1.0'
        ], [
            'emoji' => '✏️',
            'category' => 6,
            'name' => 'pencil',
            'version' => '1.0'
        ], [
            'emoji' => '✒️',
            'category' => 6,
            'name' => 'black nib',
            'version' => '1.0'
        ], [
            'emoji' => '🖋️',
            'category' => 6,
            'name' => 'fountain pen',
            'version' => '1.0'
        ], [
            'emoji' => '🖊️',
            'category' => 6,
            'name' => 'pen',
            'version' => '1.0'
        ], [
            'emoji' => '🖌️',
            'category' => 6,
            'name' => 'paintbrush',
            'version' => '1.0'
        ], [
            'emoji' => '🖍️',
            'category' => 6,
            'name' => 'crayon',
            'version' => '1.0'
        ], [
            'emoji' => '📝',
            'category' => 6,
            'name' => 'memo',
            'version' => '1.0'
        ], [
            'emoji' => '💼',
            'category' => 6,
            'name' => 'briefcase',
            'version' => '1.0'
        ], [
            'emoji' => '📁',
            'category' => 6,
            'name' => 'file folder',
            'version' => '1.0'
        ], [
            'emoji' => '📂',
            'category' => 6,
            'name' => 'open file folder',
            'version' => '1.0'
        ], [
            'emoji' => '🗂️',
            'category' => 6,
            'name' => 'card index dividers',
            'version' => '1.0'
        ], [
            'emoji' => '📅',
            'category' => 6,
            'name' => 'calendar',
            'version' => '1.0'
        ], [
            'emoji' => '📆',
            'category' => 6,
            'name' => 'tear-off calendar',
            'version' => '1.0'
        ], [
            'emoji' => '🗒️',
            'category' => 6,
            'name' => 'spiral notepad',
            'version' => '1.0'
        ], [
            'emoji' => '🗓️',
            'category' => 6,
            'name' => 'spiral calendar',
            'version' => '1.0'
        ], [
            'emoji' => '📇',
            'category' => 6,
            'name' => 'card index',
            'version' => '1.0'
        ], [
            'emoji' => '📈',
            'category' => 6,
            'name' => 'chart increasing',
            'version' => '1.0'
        ], [
            'emoji' => '📉',
            'category' => 6,
            'name' => 'chart decreasing',
            'version' => '1.0'
        ], [
            'emoji' => '📊',
            'category' => 6,
            'name' => 'bar chart',
            'version' => '1.0'
        ], [
            'emoji' => '📋',
            'category' => 6,
            'name' => 'clipboard',
            'version' => '1.0'
        ], [
            'emoji' => '📌',
            'category' => 6,
            'name' => 'pushpin',
            'version' => '1.0'
        ], [
            'emoji' => '📍',
            'category' => 6,
            'name' => 'round pushpin',
            'version' => '1.0'
        ], [
            'emoji' => '📎',
            'category' => 6,
            'name' => 'paperclip',
            'version' => '1.0'
        ], [
            'emoji' => '🖇️',
            'category' => 6,
            'name' => 'linked paperclips',
            'version' => '1.0'
        ], [
            'emoji' => '📏',
            'category' => 6,
            'name' => 'straight ruler',
            'version' => '1.0'
        ], [
            'emoji' => '📐',
            'category' => 6,
            'name' => 'triangular ruler',
            'version' => '1.0'
        ], [
            'emoji' => '✂️',
            'category' => 6,
            'name' => 'scissors',
            'version' => '1.0'
        ], [
            'emoji' => '🗃️',
            'category' => 6,
            'name' => 'card file box',
            'version' => '1.0'
        ], [
            'emoji' => '🗄️',
            'category' => 6,
            'name' => 'file cabinet',
            'version' => '1.0'
        ], [
            'emoji' => '🗑️',
            'category' => 6,
            'name' => 'wastebasket',
            'version' => '1.0'
        ], [
            'emoji' => '🔒',
            'category' => 6,
            'name' => 'locked',
            'version' => '1.0'
        ], [
            'emoji' => '🔓',
            'category' => 6,
            'name' => 'unlocked',
            'version' => '1.0'
        ], [
            'emoji' => '🔏',
            'category' => 6,
            'name' => 'locked with pen',
            'version' => '1.0'
        ], [
            'emoji' => '🔐',
            'category' => 6,
            'name' => 'locked with key',
            'version' => '1.0'
        ], [
            'emoji' => '🔑',
            'category' => 6,
            'name' => 'key',
            'version' => '1.0'
        ], [
            'emoji' => '🗝️',
            'category' => 6,
            'name' => 'old key',
            'version' => '1.0'
        ], [
            'emoji' => '🔨',
            'category' => 6,
            'name' => 'hammer',
            'version' => '1.0'
        ], [
            'emoji' => '🪓',
            'category' => 6,
            'name' => 'axe',
            'version' => '12.0'
        ], [
            'emoji' => '⛏️',
            'category' => 6,
            'name' => 'pick',
            'version' => '1.0'
        ], [
            'emoji' => '⚒️',
            'category' => 6,
            'name' => 'hammer and pick',
            'version' => '1.0'
        ], [
            'emoji' => '🛠️',
            'category' => 6,
            'name' => 'hammer and wrench',
            'version' => '1.0'
        ], [
            'emoji' => '🗡️',
            'category' => 6,
            'name' => 'dagger',
            'version' => '1.0'
        ], [
            'emoji' => '⚔️',
            'category' => 6,
            'name' => 'crossed swords',
            'version' => '1.0'
        ], [
            'emoji' => '🔫',
            'category' => 6,
            'name' => 'pistol',
            'version' => '1.0'
        ], [
            'emoji' => '🪃',
            'category' => 6,
            'name' => 'boomerang',
            'version' => '13.0'
        ], [
            'emoji' => '🏹',
            'category' => 6,
            'name' => 'bow and arrow',
            'version' => '1.0'
        ], [
            'emoji' => '🛡️',
            'category' => 6,
            'name' => 'shield',
            'version' => '1.0'
        ], [
            'emoji' => '🪚',
            'category' => 6,
            'name' => 'carpentry saw',
            'version' => '13.0'
        ], [
            'emoji' => '🔧',
            'category' => 6,
            'name' => 'wrench',
            'version' => '1.0'
        ], [
            'emoji' => '🪛',
            'category' => 6,
            'name' => 'screwdriver',
            'version' => '13.0'
        ], [
            'emoji' => '🔩',
            'category' => 6,
            'name' => 'nut and bolt',
            'version' => '1.0'
        ], [
            'emoji' => '⚙️',
            'category' => 6,
            'name' => 'gear',
            'version' => '1.0'
        ], [
            'emoji' => '🗜️',
            'category' => 6,
            'name' => 'clamp',
            'version' => '1.0'
        ], [
            'emoji' => '⚖️',
            'category' => 6,
            'name' => 'balance scale',
            'version' => '1.0'
        ], [
            'emoji' => '🦯',
            'category' => 6,
            'name' => 'white cane',
            'version' => '12.0'
        ], [
            'emoji' => '🔗',
            'category' => 6,
            'name' => 'link',
            'version' => '1.0'
        ], [
            'emoji' => '⛓️',
            'category' => 6,
            'name' => 'chains',
            'version' => '1.0'
        ], [
            'emoji' => '🪝',
            'category' => 6,
            'name' => 'hook',
            'version' => '13.0'
        ], [
            'emoji' => '🧰',
            'category' => 6,
            'name' => 'toolbox',
            'version' => '11.0'
        ], [
            'emoji' => '🧲',
            'category' => 6,
            'name' => 'magnet',
            'version' => '11.0'
        ], [
            'emoji' => '🪜',
            'category' => 6,
            'name' => 'ladder',
            'version' => '13.0'
        ], [
            'emoji' => '⚗️',
            'category' => 6,
            'name' => 'alembic',
            'version' => '1.0'
        ], [
            'emoji' => '🧪',
            'category' => 6,
            'name' => 'test tube',
            'version' => '11.0'
        ], [
            'emoji' => '🧫',
            'category' => 6,
            'name' => 'petri dish',
            'version' => '11.0'
        ], [
            'emoji' => '🧬',
            'category' => 6,
            'name' => 'dna',
            'version' => '11.0'
        ], [
            'emoji' => '🔬',
            'category' => 6,
            'name' => 'microscope',
            'version' => '1.0'
        ], [
            'emoji' => '🔭',
            'category' => 6,
            'name' => 'telescope',
            'version' => '1.0'
        ], [
            'emoji' => '📡',
            'category' => 6,
            'name' => 'satellite antenna',
            'version' => '1.0'
        ], [
            'emoji' => '💉',
            'category' => 6,
            'name' => 'syringe',
            'version' => '1.0'
        ], [
            'emoji' => '🩸',
            'category' => 6,
            'name' => 'drop of blood',
            'version' => '12.0'
        ], [
            'emoji' => '💊',
            'category' => 6,
            'name' => 'pill',
            'version' => '1.0'
        ], [
            'emoji' => '🩹',
            'category' => 6,
            'name' => 'adhesive bandage',
            'version' => '12.0'
        ], [
            'emoji' => '🩺',
            'category' => 6,
            'name' => 'stethoscope',
            'version' => '12.0'
        ], [
            'emoji' => '🚪',
            'category' => 6,
            'name' => 'door',
            'version' => '1.0'
        ], [
            'emoji' => '🛗',
            'category' => 6,
            'name' => 'elevator',
            'version' => '13.0'
        ], [
            'emoji' => '🪞',
            'category' => 6,
            'name' => 'mirror',
            'version' => '13.0'
        ], [
            'emoji' => '🪟',
            'category' => 6,
            'name' => 'window',
            'version' => '13.0'
        ], [
            'emoji' => '🛏️',
            'category' => 6,
            'name' => 'bed',
            'version' => '1.0'
        ], [
            'emoji' => '🛋️',
            'category' => 6,
            'name' => 'couch and lamp',
            'version' => '1.0'
        ], [
            'emoji' => '🪑',
            'category' => 6,
            'name' => 'chair',
            'version' => '12.0'
        ], [
            'emoji' => '🚽',
            'category' => 6,
            'name' => 'toilet',
            'version' => '1.0'
        ], [
            'emoji' => '🪠',
            'category' => 6,
            'name' => 'plunger',
            'version' => '13.0'
        ], [
            'emoji' => '🚿',
            'category' => 6,
            'name' => 'shower',
            'version' => '1.0'
        ], [
            'emoji' => '🛁',
            'category' => 6,
            'name' => 'bathtub',
            'version' => '1.0'
        ], [
            'emoji' => '🪤',
            'category' => 6,
            'name' => 'mouse trap',
            'version' => '13.0'
        ], [
            'emoji' => '🪒',
            'category' => 6,
            'name' => 'razor',
            'version' => '12.0'
        ], [
            'emoji' => '🧴',
            'category' => 6,
            'name' => 'lotion bottle',
            'version' => '11.0'
        ], [
            'emoji' => '🧷',
            'category' => 6,
            'name' => 'safety pin',
            'version' => '11.0'
        ], [
            'emoji' => '🧹',
            'category' => 6,
            'name' => 'broom',
            'version' => '11.0'
        ], [
            'emoji' => '🧺',
            'category' => 6,
            'name' => 'basket',
            'version' => '11.0'
        ], [
            'emoji' => '🧻',
            'category' => 6,
            'name' => 'roll of paper',
            'version' => '11.0'
        ], [
            'emoji' => '🪣',
            'category' => 6,
            'name' => 'bucket',
            'version' => '13.0'
        ], [
            'emoji' => '🧼',
            'category' => 6,
            'name' => 'soap',
            'version' => '11.0'
        ], [
            'emoji' => '🪥',
            'category' => 6,
            'name' => 'toothbrush',
            'version' => '13.0'
        ], [
            'emoji' => '🧽',
            'category' => 6,
            'name' => 'sponge',
            'version' => '11.0'
        ], [
            'emoji' => '🧯',
            'category' => 6,
            'name' => 'fire extinguisher',
            'version' => '11.0'
        ], [
            'emoji' => '🛒',
            'category' => 6,
            'name' => 'shopping cart',
            'version' => '3.0'
        ], [
            'emoji' => '🚬',
            'category' => 6,
            'name' => 'cigarette',
            'version' => '1.0'
        ], [
            'emoji' => '⚰️',
            'category' => 6,
            'name' => 'coffin',
            'version' => '1.0'
        ], [
            'emoji' => '🪦',
            'category' => 6,
            'name' => 'headstone',
            'version' => '13.0'
        ], [
            'emoji' => '⚱️',
            'category' => 6,
            'name' => 'funeral urn',
            'version' => '1.0'
        ], [
            'emoji' => '🗿',
            'category' => 6,
            'name' => 'moai',
            'version' => '1.0'
        ], [
            'emoji' => '🪧',
            'category' => 6,
            'name' => 'placard',
            'version' => '13.0'
        ], [
            'emoji' => '🏧',
            'category' => 7,
            'name' => 'ATM sign',
            'version' => '1.0'
        ], [
            'emoji' => '🚮',
            'category' => 7,
            'name' => 'litter in bin sign',
            'version' => '1.0'
        ], [
            'emoji' => '🚰',
            'category' => 7,
            'name' => 'potable water',
            'version' => '1.0'
        ], [
            'emoji' => '♿',
            'category' => 7,
            'name' => 'wheelchair symbol',
            'version' => '1.0'
        ], [
            'emoji' => '🚹',
            'category' => 7,
            'name' => 'men’s room',
            'version' => '1.0'
        ], [
            'emoji' => '🚺',
            'category' => 7,
            'name' => 'women’s room',
            'version' => '1.0'
        ], [
            'emoji' => '🚻',
            'category' => 7,
            'name' => 'restroom',
            'version' => '1.0'
        ], [
            'emoji' => '🚼',
            'category' => 7,
            'name' => 'baby symbol',
            'version' => '1.0'
        ], [
            'emoji' => '🚾',
            'category' => 7,
            'name' => 'water closet',
            'version' => '1.0'
        ], [
            'emoji' => '🛂',
            'category' => 7,
            'name' => 'passport control',
            'version' => '1.0'
        ], [
            'emoji' => '🛃',
            'category' => 7,
            'name' => 'customs',
            'version' => '1.0'
        ], [
            'emoji' => '🛄',
            'category' => 7,
            'name' => 'baggage claim',
            'version' => '1.0'
        ], [
            'emoji' => '🛅',
            'category' => 7,
            'name' => 'left luggage',
            'version' => '1.0'
        ], [
            'emoji' => '⚠️',
            'category' => 7,
            'name' => 'warning',
            'version' => '1.0'
        ], [
            'emoji' => '🚸',
            'category' => 7,
            'name' => 'children crossing',
            'version' => '1.0'
        ], [
            'emoji' => '⛔',
            'category' => 7,
            'name' => 'no entry',
            'version' => '1.0'
        ], [
            'emoji' => '🚫',
            'category' => 7,
            'name' => 'prohibited',
            'version' => '1.0'
        ], [
            'emoji' => '🚳',
            'category' => 7,
            'name' => 'no bicycles',
            'version' => '1.0'
        ], [
            'emoji' => '🚭',
            'category' => 7,
            'name' => 'no smoking',
            'version' => '1.0'
        ], [
            'emoji' => '🚯',
            'category' => 7,
            'name' => 'no littering',
            'version' => '1.0'
        ], [
            'emoji' => '🚱',
            'category' => 7,
            'name' => 'non-potable water',
            'version' => '1.0'
        ], [
            'emoji' => '🚷',
            'category' => 7,
            'name' => 'no pedestrians',
            'version' => '1.0'
        ], [
            'emoji' => '📵',
            'category' => 7,
            'name' => 'no mobile phones',
            'version' => '1.0'
        ], [
            'emoji' => '🔞',
            'category' => 7,
            'name' => 'no one under eighteen',
            'version' => '1.0'
        ], [
            'emoji' => '☢️',
            'category' => 7,
            'name' => 'radioactive',
            'version' => '1.0'
        ], [
            'emoji' => '☣️',
            'category' => 7,
            'name' => 'biohazard',
            'version' => '1.0'
        ], [
            'emoji' => '⬆️',
            'category' => 7,
            'name' => 'up arrow',
            'version' => '1.0'
        ], [
            'emoji' => '↗️',
            'category' => 7,
            'name' => 'up-right arrow',
            'version' => '1.0'
        ], [
            'emoji' => '➡️',
            'category' => 7,
            'name' => 'right arrow',
            'version' => '1.0'
        ], [
            'emoji' => '↘️',
            'category' => 7,
            'name' => 'down-right arrow',
            'version' => '1.0'
        ], [
            'emoji' => '⬇️',
            'category' => 7,
            'name' => 'down arrow',
            'version' => '1.0'
        ], [
            'emoji' => '↙️',
            'category' => 7,
            'name' => 'down-left arrow',
            'version' => '1.0'
        ], [
            'emoji' => '⬅️',
            'category' => 7,
            'name' => 'left arrow',
            'version' => '1.0'
        ], [
            'emoji' => '↖️',
            'category' => 7,
            'name' => 'up-left arrow',
            'version' => '1.0'
        ], [
            'emoji' => '↕️',
            'category' => 7,
            'name' => 'up-down arrow',
            'version' => '1.0'
        ], [
            'emoji' => '↔️',
            'category' => 7,
            'name' => 'left-right arrow',
            'version' => '1.0'
        ], [
            'emoji' => '↩️',
            'category' => 7,
            'name' => 'right arrow curving left',
            'version' => '1.0'
        ], [
            'emoji' => '↪️',
            'category' => 7,
            'name' => 'left arrow curving right',
            'version' => '1.0'
        ], [
            'emoji' => '⤴️',
            'category' => 7,
            'name' => 'right arrow curving up',
            'version' => '1.0'
        ], [
            'emoji' => '⤵️',
            'category' => 7,
            'name' => 'right arrow curving down',
            'version' => '1.0'
        ], [
            'emoji' => '🔃',
            'category' => 7,
            'name' => 'clockwise vertical arrows',
            'version' => '1.0'
        ], [
            'emoji' => '🔄',
            'category' => 7,
            'name' => 'counterclockwise arrows button',
            'version' => '1.0'
        ], [
            'emoji' => '🔙',
            'category' => 7,
            'name' => 'BACK arrow',
            'version' => '1.0'
        ], [
            'emoji' => '🔚',
            'category' => 7,
            'name' => 'END arrow',
            'version' => '1.0'
        ], [
            'emoji' => '🔛',
            'category' => 7,
            'name' => 'ON! arrow',
            'version' => '1.0'
        ], [
            'emoji' => '🔜',
            'category' => 7,
            'name' => 'SOON arrow',
            'version' => '1.0'
        ], [
            'emoji' => '🔝',
            'category' => 7,
            'name' => 'TOP arrow',
            'version' => '1.0'
        ], [
            'emoji' => '🛐',
            'category' => 7,
            'name' => 'place of worship',
            'version' => '1.0'
        ], [
            'emoji' => '⚛️',
            'category' => 7,
            'name' => 'atom symbol',
            'version' => '1.0'
        ], [
            'emoji' => '🕉️',
            'category' => 7,
            'name' => 'om',
            'version' => '1.0'
        ], [
            'emoji' => '✡️',
            'category' => 7,
            'name' => 'star of David',
            'version' => '1.0'
        ], [
            'emoji' => '☸️',
            'category' => 7,
            'name' => 'wheel of dharma',
            'version' => '1.0'
        ], [
            'emoji' => '☯️',
            'category' => 7,
            'name' => 'yin yang',
            'version' => '1.0'
        ], [
            'emoji' => '✝️',
            'category' => 7,
            'name' => 'latin cross',
            'version' => '1.0'
        ], [
            'emoji' => '☦️',
            'category' => 7,
            'name' => 'orthodox cross',
            'version' => '1.0'
        ], [
            'emoji' => '☪️',
            'category' => 7,
            'name' => 'star and crescent',
            'version' => '1.0'
        ], [
            'emoji' => '☮️',
            'category' => 7,
            'name' => 'peace symbol',
            'version' => '1.0'
        ], [
            'emoji' => '🕎',
            'category' => 7,
            'name' => 'menorah',
            'version' => '1.0'
        ], [
            'emoji' => '🔯',
            'category' => 7,
            'name' => 'dotted six-pointed star',
            'version' => '1.0'
        ], [
            'emoji' => '♈',
            'category' => 7,
            'name' => 'Aries',
            'version' => '1.0'
        ], [
            'emoji' => '♉',
            'category' => 7,
            'name' => 'Taurus',
            'version' => '1.0'
        ], [
            'emoji' => '♊',
            'category' => 7,
            'name' => 'Gemini',
            'version' => '1.0'
        ], [
            'emoji' => '♋',
            'category' => 7,
            'name' => 'Cancer',
            'version' => '1.0'
        ], [
            'emoji' => '♌',
            'category' => 7,
            'name' => 'Leo',
            'version' => '1.0'
        ], [
            'emoji' => '♍',
            'category' => 7,
            'name' => 'Virgo',
            'version' => '1.0'
        ], [
            'emoji' => '♎',
            'category' => 7,
            'name' => 'Libra',
            'version' => '1.0'
        ], [
            'emoji' => '♏',
            'category' => 7,
            'name' => 'Scorpio',
            'version' => '1.0'
        ], [
            'emoji' => '♐',
            'category' => 7,
            'name' => 'Sagittarius',
            'version' => '1.0'
        ], [
            'emoji' => '♑',
            'category' => 7,
            'name' => 'Capricorn',
            'version' => '1.0'
        ], [
            'emoji' => '♒',
            'category' => 7,
            'name' => 'Aquarius',
            'version' => '1.0'
        ], [
            'emoji' => '♓',
            'category' => 7,
            'name' => 'Pisces',
            'version' => '1.0'
        ], [
            'emoji' => '⛎',
            'category' => 7,
            'name' => 'Ophiuchus',
            'version' => '1.0'
        ], [
            'emoji' => '🔀',
            'category' => 7,
            'name' => 'shuffle tracks button',
            'version' => '1.0'
        ], [
            'emoji' => '🔁',
            'category' => 7,
            'name' => 'repeat button',
            'version' => '1.0'
        ], [
            'emoji' => '🔂',
            'category' => 7,
            'name' => 'repeat single button',
            'version' => '1.0'
        ], [
            'emoji' => '▶️',
            'category' => 7,
            'name' => 'play button',
            'version' => '1.0'
        ], [
            'emoji' => '⏩',
            'category' => 7,
            'name' => 'fast-forward button',
            'version' => '1.0'
        ], [
            'emoji' => '⏭️',
            'category' => 7,
            'name' => 'next track button',
            'version' => '1.0'
        ], [
            'emoji' => '⏯️',
            'category' => 7,
            'name' => 'play or pause button',
            'version' => '1.0'
        ], [
            'emoji' => '◀️',
            'category' => 7,
            'name' => 'reverse button',
            'version' => '1.0'
        ], [
            'emoji' => '⏪',
            'category' => 7,
            'name' => 'fast reverse button',
            'version' => '1.0'
        ], [
            'emoji' => '⏮️',
            'category' => 7,
            'name' => 'last track button',
            'version' => '1.0'
        ], [
            'emoji' => '🔼',
            'category' => 7,
            'name' => 'upwards button',
            'version' => '1.0'
        ], [
            'emoji' => '⏫',
            'category' => 7,
            'name' => 'fast up button',
            'version' => '1.0'
        ], [
            'emoji' => '🔽',
            'category' => 7,
            'name' => 'downwards button',
            'version' => '1.0'
        ], [
            'emoji' => '⏬',
            'category' => 7,
            'name' => 'fast down button',
            'version' => '1.0'
        ], [
            'emoji' => '⏸️',
            'category' => 7,
            'name' => 'pause button',
            'version' => '1.0'
        ], [
            'emoji' => '⏹️',
            'category' => 7,
            'name' => 'stop button',
            'version' => '1.0'
        ], [
            'emoji' => '⏺️',
            'category' => 7,
            'name' => 'record button',
            'version' => '1.0'
        ], [
            'emoji' => '⏏️',
            'category' => 7,
            'name' => 'eject button',
            'version' => '1.0'
        ], [
            'emoji' => '🎦',
            'category' => 7,
            'name' => 'cinema',
            'version' => '1.0'
        ], [
            'emoji' => '🔅',
            'category' => 7,
            'name' => 'dim button',
            'version' => '1.0'
        ], [
            'emoji' => '🔆',
            'category' => 7,
            'name' => 'bright button',
            'version' => '1.0'
        ], [
            'emoji' => '📶',
            'category' => 7,
            'name' => 'antenna bars',
            'version' => '1.0'
        ], [
            'emoji' => '📳',
            'category' => 7,
            'name' => 'vibration mode',
            'version' => '1.0'
        ], [
            'emoji' => '📴',
            'category' => 7,
            'name' => 'mobile phone off',
            'version' => '1.0'
        ], [
            'emoji' => '♀️',
            'category' => 7,
            'name' => 'female sign',
            'version' => '4.0'
        ], [
            'emoji' => '♂️',
            'category' => 7,
            'name' => 'male sign',
            'version' => '4.0'
        ], [
            'emoji' => '⚧️',
            'category' => 7,
            'name' => 'transgender symbol',
            'version' => '13.0'
        ], [
            'emoji' => '✖️',
            'category' => 7,
            'name' => 'multiply',
            'version' => '1.0'
        ], [
            'emoji' => '➕',
            'category' => 7,
            'name' => 'plus',
            'version' => '1.0'
        ], [
            'emoji' => '➖',
            'category' => 7,
            'name' => 'minus',
            'version' => '1.0'
        ], [
            'emoji' => '➗',
            'category' => 7,
            'name' => 'divide',
            'version' => '1.0'
        ], [
            'emoji' => '♾️',
            'category' => 7,
            'name' => 'infinity',
            'version' => '11.0'
        ], [
            'emoji' => '‼️',
            'category' => 7,
            'name' => 'double exclamation mark',
            'version' => '1.0'
        ], [
            'emoji' => '⁉️',
            'category' => 7,
            'name' => 'exclamation question mark',
            'version' => '1.0'
        ], [
            'emoji' => '❓',
            'category' => 7,
            'name' => 'question mark',
            'version' => '1.0'
        ], [
            'emoji' => '❔',
            'category' => 7,
            'name' => 'white question mark',
            'version' => '1.0'
        ], [
            'emoji' => '❕',
            'category' => 7,
            'name' => 'white exclamation mark',
            'version' => '1.0'
        ], [
            'emoji' => '❗',
            'category' => 7,
            'name' => 'exclamation mark',
            'version' => '1.0'
        ], [
            'emoji' => '〰️',
            'category' => 7,
            'name' => 'wavy dash',
            'version' => '1.0'
        ], [
            'emoji' => '💱',
            'category' => 7,
            'name' => 'currency exchange',
            'version' => '1.0'
        ], [
            'emoji' => '💲',
            'category' => 7,
            'name' => 'heavy dollar sign',
            'version' => '1.0'
        ], [
            'emoji' => '⚕️',
            'category' => 7,
            'name' => 'medical symbol',
            'version' => '4.0'
        ], [
            'emoji' => '♻️',
            'category' => 7,
            'name' => 'recycling symbol',
            'version' => '1.0'
        ], [
            'emoji' => '⚜️',
            'category' => 7,
            'name' => 'fleur-de-lis',
            'version' => '1.0'
        ], [
            'emoji' => '🔱',
            'category' => 7,
            'name' => 'trident emblem',
            'version' => '1.0'
        ], [
            'emoji' => '📛',
            'category' => 7,
            'name' => 'name badge',
            'version' => '1.0'
        ], [
            'emoji' => '🔰',
            'category' => 7,
            'name' => 'Japanese symbol for beginner',
            'version' => '1.0'
        ], [
            'emoji' => '⭕',
            'category' => 7,
            'name' => 'hollow red circle',
            'version' => '1.0'
        ], [
            'emoji' => '✅',
            'category' => 7,
            'name' => 'check mark button',
            'version' => '1.0'
        ], [
            'emoji' => '☑️',
            'category' => 7,
            'name' => 'check box with check',
            'version' => '1.0'
        ], [
            'emoji' => '✔️',
            'category' => 7,
            'name' => 'check mark',
            'version' => '1.0'
        ], [
            'emoji' => '❌',
            'category' => 7,
            'name' => 'cross mark',
            'version' => '1.0'
        ], [
            'emoji' => '❎',
            'category' => 7,
            'name' => 'cross mark button',
            'version' => '1.0'
        ], [
            'emoji' => '➰',
            'category' => 7,
            'name' => 'curly loop',
            'version' => '1.0'
        ], [
            'emoji' => '➿',
            'category' => 7,
            'name' => 'double curly loop',
            'version' => '1.0'
        ], [
            'emoji' => '〽️',
            'category' => 7,
            'name' => 'part alternation mark',
            'version' => '1.0'
        ], [
            'emoji' => '✳️',
            'category' => 7,
            'name' => 'eight-spoked asterisk',
            'version' => '1.0'
        ], [
            'emoji' => '✴️',
            'category' => 7,
            'name' => 'eight-pointed star',
            'version' => '1.0'
        ], [
            'emoji' => '❇️',
            'category' => 7,
            'name' => 'sparkle',
            'version' => '1.0'
        ], [
            'emoji' => '©️',
            'category' => 7,
            'name' => 'copyright',
            'version' => '1.0'
        ], [
            'emoji' => '®️',
            'category' => 7,
            'name' => 'registered',
            'version' => '1.0'
        ], [
            'emoji' => '™️',
            'category' => 7,
            'name' => 'trade mark',
            'version' => '1.0'
        ], [
            'emoji' => '#️⃣',
            'category' => 7,
            'name' => 'keycap: #',
            'version' => '1.0'
        ], [
            'emoji' => '*️⃣',
            'category' => 7,
            'name' => 'keycap: *',
            'version' => '2.0'
        ], [
            'emoji' => '0️⃣',
            'category' => 7,
            'name' => 'keycap: 0',
            'version' => '1.0'
        ], [
            'emoji' => '1️⃣',
            'category' => 7,
            'name' => 'keycap: 1',
            'version' => '1.0'
        ], [
            'emoji' => '2️⃣',
            'category' => 7,
            'name' => 'keycap: 2',
            'version' => '1.0'
        ], [
            'emoji' => '3️⃣',
            'category' => 7,
            'name' => 'keycap: 3',
            'version' => '1.0'
        ], [
            'emoji' => '4️⃣',
            'category' => 7,
            'name' => 'keycap: 4',
            'version' => '1.0'
        ], [
            'emoji' => '5️⃣',
            'category' => 7,
            'name' => 'keycap: 5',
            'version' => '1.0'
        ], [
            'emoji' => '6️⃣',
            'category' => 7,
            'name' => 'keycap: 6',
            'version' => '1.0'
        ], [
            'emoji' => '7️⃣',
            'category' => 7,
            'name' => 'keycap: 7',
            'version' => '1.0'
        ], [
            'emoji' => '8️⃣',
            'category' => 7,
            'name' => 'keycap: 8',
            'version' => '1.0'
        ], [
            'emoji' => '9️⃣',
            'category' => 7,
            'name' => 'keycap: 9',
            'version' => '1.0'
        ], [
            'emoji' => '🔟',
            'category' => 7,
            'name' => 'keycap: 10',
            'version' => '1.0'
        ], [
            'emoji' => '🔠',
            'category' => 7,
            'name' => 'input latin uppercase',
            'version' => '1.0'
        ], [
            'emoji' => '🔡',
            'category' => 7,
            'name' => 'input latin lowercase',
            'version' => '1.0'
        ], [
            'emoji' => '🔢',
            'category' => 7,
            'name' => 'input numbers',
            'version' => '1.0'
        ], [
            'emoji' => '🔣',
            'category' => 7,
            'name' => 'input symbols',
            'version' => '1.0'
        ], [
            'emoji' => '🔤',
            'category' => 7,
            'name' => 'input latin letters',
            'version' => '1.0'
        ], [
            'emoji' => '🅰️',
            'category' => 7,
            'name' => 'A button (blood type)',
            'version' => '1.0'
        ], [
            'emoji' => '🆎',
            'category' => 7,
            'name' => 'AB button (blood type)',
            'version' => '1.0'
        ], [
            'emoji' => '🅱️',
            'category' => 7,
            'name' => 'B button (blood type)',
            'version' => '1.0'
        ], [
            'emoji' => '🆑',
            'category' => 7,
            'name' => 'CL button',
            'version' => '1.0'
        ], [
            'emoji' => '🆒',
            'category' => 7,
            'name' => 'COOL button',
            'version' => '1.0'
        ], [
            'emoji' => '🆓',
            'category' => 7,
            'name' => 'FREE button',
            'version' => '1.0'
        ], [
            'emoji' => 'ℹ️',
            'category' => 7,
            'name' => 'information',
            'version' => '1.0'
        ], [
            'emoji' => '🆔',
            'category' => 7,
            'name' => 'ID button',
            'version' => '1.0'
        ], [
            'emoji' => 'Ⓜ️',
            'category' => 7,
            'name' => 'circled M',
            'version' => '1.0'
        ], [
            'emoji' => '🆕',
            'category' => 7,
            'name' => 'NEW button',
            'version' => '1.0'
        ], [
            'emoji' => '🆖',
            'category' => 7,
            'name' => 'NG button',
            'version' => '1.0'
        ], [
            'emoji' => '🅾️',
            'category' => 7,
            'name' => 'O button (blood type)',
            'version' => '1.0'
        ], [
            'emoji' => '🆗',
            'category' => 7,
            'name' => 'OK button',
            'version' => '1.0'
        ], [
            'emoji' => '🅿️',
            'category' => 7,
            'name' => 'P button',
            'version' => '1.0'
        ], [
            'emoji' => '🆘',
            'category' => 7,
            'name' => 'SOS button',
            'version' => '1.0'
        ], [
            'emoji' => '🆙',
            'category' => 7,
            'name' => 'UP! button',
            'version' => '1.0'
        ], [
            'emoji' => '🆚',
            'category' => 7,
            'name' => 'VS button',
            'version' => '1.0'
        ], [
            'emoji' => '🈁',
            'category' => 7,
            'name' => 'Japanese “here” button',
            'version' => '1.0'
        ], [
            'emoji' => '🈂️',
            'category' => 7,
            'name' => 'Japanese “service charge” button',
            'version' => '1.0'
        ], [
            'emoji' => '🈷️',
            'category' => 7,
            'name' => 'Japanese “monthly amount” button',
            'version' => '1.0'
        ], [
            'emoji' => '🈶',
            'category' => 7,
            'name' => 'Japanese “not free of charge” button',
            'version' => '1.0'
        ], [
            'emoji' => '🈯',
            'category' => 7,
            'name' => 'Japanese “reserved” button',
            'version' => '1.0'
        ], [
            'emoji' => '🉐',
            'category' => 7,
            'name' => 'Japanese “bargain” button',
            'version' => '1.0'
        ], [
            'emoji' => '🈹',
            'category' => 7,
            'name' => 'Japanese “discount” button',
            'version' => '1.0'
        ], [
            'emoji' => '🈚',
            'category' => 7,
            'name' => 'Japanese “free of charge” button',
            'version' => '1.0'
        ], [
            'emoji' => '🈲',
            'category' => 7,
            'name' => 'Japanese “prohibited” button',
            'version' => '1.0'
        ], [
            'emoji' => '🉑',
            'category' => 7,
            'name' => 'Japanese “acceptable” button',
            'version' => '1.0'
        ], [
            'emoji' => '🈸',
            'category' => 7,
            'name' => 'Japanese “application” button',
            'version' => '1.0'
        ], [
            'emoji' => '🈴',
            'category' => 7,
            'name' => 'Japanese “passing grade” button',
            'version' => '1.0'
        ], [
            'emoji' => '🈳',
            'category' => 7,
            'name' => 'Japanese “vacancy” button',
            'version' => '1.0'
        ], [
            'emoji' => '㊗️',
            'category' => 7,
            'name' => 'Japanese “congratulations” button',
            'version' => '1.0'
        ], [
            'emoji' => '㊙️',
            'category' => 7,
            'name' => 'Japanese “secret” button',
            'version' => '1.0'
        ], [
            'emoji' => '🈺',
            'category' => 7,
            'name' => 'Japanese “open for business” button',
            'version' => '1.0'
        ], [
            'emoji' => '🈵',
            'category' => 7,
            'name' => 'Japanese “no vacancy” button',
            'version' => '1.0'
        ], [
            'emoji' => '🔴',
            'category' => 7,
            'name' => 'red circle',
            'version' => '1.0'
        ], [
            'emoji' => '🟠',
            'category' => 7,
            'name' => 'orange circle',
            'version' => '12.0'
        ], [
            'emoji' => '🟡',
            'category' => 7,
            'name' => 'yellow circle',
            'version' => '12.0'
        ], [
            'emoji' => '🟢',
            'category' => 7,
            'name' => 'green circle',
            'version' => '12.0'
        ], [
            'emoji' => '🔵',
            'category' => 7,
            'name' => 'blue circle',
            'version' => '1.0'
        ], [
            'emoji' => '🟣',
            'category' => 7,
            'name' => 'purple circle',
            'version' => '12.0'
        ], [
            'emoji' => '🟤',
            'category' => 7,
            'name' => 'brown circle',
            'version' => '12.0'
        ], [
            'emoji' => '⚫',
            'category' => 7,
            'name' => 'black circle',
            'version' => '1.0'
        ], [
            'emoji' => '⚪',
            'category' => 7,
            'name' => 'white circle',
            'version' => '1.0'
        ], [
            'emoji' => '🟥',
            'category' => 7,
            'name' => 'red square',
            'version' => '12.0'
        ], [
            'emoji' => '🟧',
            'category' => 7,
            'name' => 'orange square',
            'version' => '12.0'
        ], [
            'emoji' => '🟨',
            'category' => 7,
            'name' => 'yellow square',
            'version' => '12.0'
        ], [
            'emoji' => '🟩',
            'category' => 7,
            'name' => 'green square',
            'version' => '12.0'
        ], [
            'emoji' => '🟦',
            'category' => 7,
            'name' => 'blue square',
            'version' => '12.0'
        ], [
            'emoji' => '🟪',
            'category' => 7,
            'name' => 'purple square',
            'version' => '12.0'
        ], [
            'emoji' => '🟫',
            'category' => 7,
            'name' => 'brown square',
            'version' => '12.0'
        ], [
            'emoji' => '⬛',
            'category' => 7,
            'name' => 'black large square',
            'version' => '1.0'
        ], [
            'emoji' => '⬜',
            'category' => 7,
            'name' => 'white large square',
            'version' => '1.0'
        ], [
            'emoji' => '◼️',
            'category' => 7,
            'name' => 'black medium square',
            'version' => '1.0'
        ], [
            'emoji' => '◻️',
            'category' => 7,
            'name' => 'white medium square',
            'version' => '1.0'
        ], [
            'emoji' => '◾',
            'category' => 7,
            'name' => 'black medium-small square',
            'version' => '1.0'
        ], [
            'emoji' => '◽',
            'category' => 7,
            'name' => 'white medium-small square',
            'version' => '1.0'
        ], [
            'emoji' => '▪️',
            'category' => 7,
            'name' => 'black small square',
            'version' => '1.0'
        ], [
            'emoji' => '▫️',
            'category' => 7,
            'name' => 'white small square',
            'version' => '1.0'
        ], [
            'emoji' => '🔶',
            'category' => 7,
            'name' => 'large orange diamond',
            'version' => '1.0'
        ], [
            'emoji' => '🔷',
            'category' => 7,
            'name' => 'large blue diamond',
            'version' => '1.0'
        ], [
            'emoji' => '🔸',
            'category' => 7,
            'name' => 'small orange diamond',
            'version' => '1.0'
        ], [
            'emoji' => '🔹',
            'category' => 7,
            'name' => 'small blue diamond',
            'version' => '1.0'
        ], [
            'emoji' => '🔺',
            'category' => 7,
            'name' => 'red triangle pointed up',
            'version' => '1.0'
        ], [
            'emoji' => '🔻',
            'category' => 7,
            'name' => 'red triangle pointed down',
            'version' => '1.0'
        ], [
            'emoji' => '💠',
            'category' => 7,
            'name' => 'diamond with a dot',
            'version' => '1.0'
        ], [
            'emoji' => '🔘',
            'category' => 7,
            'name' => 'radio button',
            'version' => '1.0'
        ], [
            'emoji' => '🔳',
            'category' => 7,
            'name' => 'white square button',
            'version' => '1.0'
        ], [
            'emoji' => '🔲',
            'category' => 7,
            'name' => 'black square button',
            'version' => '1.0'
        ], [
            'emoji' => '🏁',
            'category' => 8,
            'name' => 'chequered flag',
            'version' => '1.0'
        ], [
            'emoji' => '🚩',
            'category' => 8,
            'name' => 'triangular flag',
            'version' => '1.0'
        ], [
            'emoji' => '🎌',
            'category' => 8,
            'name' => 'crossed flags',
            'version' => '1.0'
        ], [
            'emoji' => '🏴',
            'category' => 8,
            'name' => 'black flag',
            'version' => '1.0'
        ], [
            'emoji' => '🏳️',
            'category' => 8,
            'name' => 'white flag',
            'version' => '1.0'
        ], [
            'emoji' => '🏳️‍🌈',
            'category' => 8,
            'name' => 'rainbow flag',
            'version' => '4.0'
        ], [
            'emoji' => '🏳️‍⚧️',
            'category' => 8,
            'name' => 'transgender flag',
            'version' => '13.0'
        ], [
            'emoji' => '🏴‍☠️',
            'category' => 8,
            'name' => 'pirate flag',
            'version' => '11.0'
        ], [
            'emoji' => '🇦🇨',
            'category' => 8,
            'name' => 'flag: Ascension Island',
            'version' => '2.0'
        ], [
            'emoji' => '🇦🇩',
            'category' => 8,
            'name' => 'flag: Andorra',
            'version' => '2.0'
        ], [
            'emoji' => '🇦🇪',
            'category' => 8,
            'name' => 'flag: United Arab Emirates',
            'version' => '2.0'
        ], [
            'emoji' => '🇦🇫',
            'category' => 8,
            'name' => 'flag: Afghanistan',
            'version' => '2.0'
        ], [
            'emoji' => '🇦🇬',
            'category' => 8,
            'name' => 'flag: Antigua & Barbuda',
            'version' => '2.0'
        ], [
            'emoji' => '🇦🇮',
            'category' => 8,
            'name' => 'flag: Anguilla',
            'version' => '2.0'
        ], [
            'emoji' => '🇦🇱',
            'category' => 8,
            'name' => 'flag: Albania',
            'version' => '2.0'
        ], [
            'emoji' => '🇦🇲',
            'category' => 8,
            'name' => 'flag: Armenia',
            'version' => '2.0'
        ], [
            'emoji' => '🇦🇴',
            'category' => 8,
            'name' => 'flag: Angola',
            'version' => '2.0'
        ], [
            'emoji' => '🇦🇶',
            'category' => 8,
            'name' => 'flag: Antarctica',
            'version' => '2.0'
        ], [
            'emoji' => '🇦🇷',
            'category' => 8,
            'name' => 'flag: Argentina',
            'version' => '2.0'
        ], [
            'emoji' => '🇦🇸',
            'category' => 8,
            'name' => 'flag: American Samoa',
            'version' => '2.0'
        ], [
            'emoji' => '🇦🇹',
            'category' => 8,
            'name' => 'flag: Austria',
            'version' => '2.0'
        ], [
            'emoji' => '🇦🇺',
            'category' => 8,
            'name' => 'flag: Australia',
            'version' => '2.0'
        ], [
            'emoji' => '🇦🇼',
            'category' => 8,
            'name' => 'flag: Aruba',
            'version' => '2.0'
        ], [
            'emoji' => '🇦🇽',
            'category' => 8,
            'name' => 'flag: Åland Islands',
            'version' => '2.0'
        ], [
            'emoji' => '🇦🇿',
            'category' => 8,
            'name' => 'flag: Azerbaijan',
            'version' => '2.0'
        ], [
            'emoji' => '🇧🇦',
            'category' => 8,
            'name' => 'flag: Bosnia & Herzegovina',
            'version' => '2.0'
        ], [
            'emoji' => '🇧🇧',
            'category' => 8,
            'name' => 'flag: Barbados',
            'version' => '2.0'
        ], [
            'emoji' => '🇧🇩',
            'category' => 8,
            'name' => 'flag: Bangladesh',
            'version' => '2.0'
        ], [
            'emoji' => '🇧🇪',
            'category' => 8,
            'name' => 'flag: Belgium',
            'version' => '2.0'
        ], [
            'emoji' => '🇧🇫',
            'category' => 8,
            'name' => 'flag: Burkina Faso',
            'version' => '2.0'
        ], [
            'emoji' => '🇧🇬',
            'category' => 8,
            'name' => 'flag: Bulgaria',
            'version' => '2.0'
        ], [
            'emoji' => '🇧🇭',
            'category' => 8,
            'name' => 'flag: Bahrain',
            'version' => '2.0'
        ], [
            'emoji' => '🇧🇮',
            'category' => 8,
            'name' => 'flag: Burundi',
            'version' => '2.0'
        ], [
            'emoji' => '🇧🇯',
            'category' => 8,
            'name' => 'flag: Benin',
            'version' => '2.0'
        ], [
            'emoji' => '🇧🇱',
            'category' => 8,
            'name' => 'flag: St. Barthélemy',
            'version' => '2.0'
        ], [
            'emoji' => '🇧🇲',
            'category' => 8,
            'name' => 'flag: Bermuda',
            'version' => '2.0'
        ], [
            'emoji' => '🇧🇳',
            'category' => 8,
            'name' => 'flag: Brunei',
            'version' => '2.0'
        ], [
            'emoji' => '🇧🇴',
            'category' => 8,
            'name' => 'flag: Bolivia',
            'version' => '2.0'
        ], [
            'emoji' => '🇧🇶',
            'category' => 8,
            'name' => 'flag: Caribbean Netherlands',
            'version' => '2.0'
        ], [
            'emoji' => '🇧🇷',
            'category' => 8,
            'name' => 'flag: Brazil',
            'version' => '2.0'
        ], [
            'emoji' => '🇧🇸',
            'category' => 8,
            'name' => 'flag: Bahamas',
            'version' => '2.0'
        ], [
            'emoji' => '🇧🇹',
            'category' => 8,
            'name' => 'flag: Bhutan',
            'version' => '2.0'
        ], [
            'emoji' => '🇧🇻',
            'category' => 8,
            'name' => 'flag: Bouvet Island',
            'version' => '2.0'
        ], [
            'emoji' => '🇧🇼',
            'category' => 8,
            'name' => 'flag: Botswana',
            'version' => '2.0'
        ], [
            'emoji' => '🇧🇾',
            'category' => 8,
            'name' => 'flag: Belarus',
            'version' => '2.0'
        ], [
            'emoji' => '🇧🇿',
            'category' => 8,
            'name' => 'flag: Belize',
            'version' => '2.0'
        ], [
            'emoji' => '🇨🇦',
            'category' => 8,
            'name' => 'flag: Canada',
            'version' => '2.0'
        ], [
            'emoji' => '🇨🇨',
            'category' => 8,
            'name' => 'flag: Cocos (Keeling) Islands',
            'version' => '2.0'
        ], [
            'emoji' => '🇨🇩',
            'category' => 8,
            'name' => 'flag: Congo - Kinshasa',
            'version' => '2.0'
        ], [
            'emoji' => '🇨🇫',
            'category' => 8,
            'name' => 'flag: Central African Republic',
            'version' => '2.0'
        ], [
            'emoji' => '🇨🇬',
            'category' => 8,
            'name' => 'flag: Congo - Brazzaville',
            'version' => '2.0'
        ], [
            'emoji' => '🇨🇭',
            'category' => 8,
            'name' => 'flag: Switzerland',
            'version' => '2.0'
        ], [
            'emoji' => '🇨🇮',
            'category' => 8,
            'name' => 'flag: Côte d’Ivoire',
            'version' => '2.0'
        ], [
            'emoji' => '🇨🇰',
            'category' => 8,
            'name' => 'flag: Cook Islands',
            'version' => '2.0'
        ], [
            'emoji' => '🇨🇱',
            'category' => 8,
            'name' => 'flag: Chile',
            'version' => '2.0'
        ], [
            'emoji' => '🇨🇲',
            'category' => 8,
            'name' => 'flag: Cameroon',
            'version' => '2.0'
        ], [
            'emoji' => '🇨🇳',
            'category' => 8,
            'name' => 'flag: China',
            'version' => '1.0'
        ], [
            'emoji' => '🇨🇴',
            'category' => 8,
            'name' => 'flag: Colombia',
            'version' => '2.0'
        ], [
            'emoji' => '🇨🇵',
            'category' => 8,
            'name' => 'flag: Clipperton Island',
            'version' => '2.0'
        ], [
            'emoji' => '🇨🇷',
            'category' => 8,
            'name' => 'flag: Costa Rica',
            'version' => '2.0'
        ], [
            'emoji' => '🇨🇺',
            'category' => 8,
            'name' => 'flag: Cuba',
            'version' => '2.0'
        ], [
            'emoji' => '🇨🇻',
            'category' => 8,
            'name' => 'flag: Cape Verde',
            'version' => '2.0'
        ], [
            'emoji' => '🇨🇼',
            'category' => 8,
            'name' => 'flag: Curaçao',
            'version' => '2.0'
        ], [
            'emoji' => '🇨🇽',
            'category' => 8,
            'name' => 'flag: Christmas Island',
            'version' => '2.0'
        ], [
            'emoji' => '🇨🇾',
            'category' => 8,
            'name' => 'flag: Cyprus',
            'version' => '2.0'
        ], [
            'emoji' => '🇨🇿',
            'category' => 8,
            'name' => 'flag: Czechia',
            'version' => '2.0'
        ], [
            'emoji' => '🇩🇪',
            'category' => 8,
            'name' => 'flag: Germany',
            'version' => '1.0'
        ], [
            'emoji' => '🇩🇬',
            'category' => 8,
            'name' => 'flag: Diego Garcia',
            'version' => '2.0'
        ], [
            'emoji' => '🇩🇯',
            'category' => 8,
            'name' => 'flag: Djibouti',
            'version' => '2.0'
        ], [
            'emoji' => '🇩🇰',
            'category' => 8,
            'name' => 'flag: Denmark',
            'version' => '2.0'
        ], [
            'emoji' => '🇩🇲',
            'category' => 8,
            'name' => 'flag: Dominica',
            'version' => '2.0'
        ], [
            'emoji' => '🇩🇴',
            'category' => 8,
            'name' => 'flag: Dominican Republic',
            'version' => '2.0'
        ], [
            'emoji' => '🇩🇿',
            'category' => 8,
            'name' => 'flag: Algeria',
            'version' => '2.0'
        ], [
            'emoji' => '🇪🇦',
            'category' => 8,
            'name' => 'flag: Ceuta & Melilla',
            'version' => '2.0'
        ], [
            'emoji' => '🇪🇨',
            'category' => 8,
            'name' => 'flag: Ecuador',
            'version' => '2.0'
        ], [
            'emoji' => '🇪🇪',
            'category' => 8,
            'name' => 'flag: Estonia',
            'version' => '2.0'
        ], [
            'emoji' => '🇪🇬',
            'category' => 8,
            'name' => 'flag: Egypt',
            'version' => '2.0'
        ], [
            'emoji' => '🇪🇭',
            'category' => 8,
            'name' => 'flag: Western Sahara',
            'version' => '2.0'
        ], [
            'emoji' => '🇪🇷',
            'category' => 8,
            'name' => 'flag: Eritrea',
            'version' => '2.0'
        ], [
            'emoji' => '🇪🇸',
            'category' => 8,
            'name' => 'flag: Spain',
            'version' => '1.0'
        ], [
            'emoji' => '🇪🇹',
            'category' => 8,
            'name' => 'flag: Ethiopia',
            'version' => '2.0'
        ], [
            'emoji' => '🇪🇺',
            'category' => 8,
            'name' => 'flag: European Union',
            'version' => '2.0'
        ], [
            'emoji' => '🇫🇮',
            'category' => 8,
            'name' => 'flag: Finland',
            'version' => '2.0'
        ], [
            'emoji' => '🇫🇯',
            'category' => 8,
            'name' => 'flag: Fiji',
            'version' => '2.0'
        ], [
            'emoji' => '🇫🇰',
            'category' => 8,
            'name' => 'flag: Falkland Islands',
            'version' => '2.0'
        ], [
            'emoji' => '🇫🇲',
            'category' => 8,
            'name' => 'flag: Micronesia',
            'version' => '2.0'
        ], [
            'emoji' => '🇫🇴',
            'category' => 8,
            'name' => 'flag: Faroe Islands',
            'version' => '2.0'
        ], [
            'emoji' => '🇫🇷',
            'category' => 8,
            'name' => 'flag: France',
            'version' => '1.0'
        ], [
            'emoji' => '🇬🇦',
            'category' => 8,
            'name' => 'flag: Gabon',
            'version' => '2.0'
        ], [
            'emoji' => '🇬🇧',
            'category' => 8,
            'name' => 'flag: United Kingdom',
            'version' => '1.0'
        ], [
            'emoji' => '🇬🇩',
            'category' => 8,
            'name' => 'flag: Grenada',
            'version' => '2.0'
        ], [
            'emoji' => '🇬🇪',
            'category' => 8,
            'name' => 'flag: Georgia',
            'version' => '2.0'
        ], [
            'emoji' => '🇬🇫',
            'category' => 8,
            'name' => 'flag: French Guiana',
            'version' => '2.0'
        ], [
            'emoji' => '🇬🇬',
            'category' => 8,
            'name' => 'flag: Guernsey',
            'version' => '2.0'
        ], [
            'emoji' => '🇬🇭',
            'category' => 8,
            'name' => 'flag: Ghana',
            'version' => '2.0'
        ], [
            'emoji' => '🇬🇮',
            'category' => 8,
            'name' => 'flag: Gibraltar',
            'version' => '2.0'
        ], [
            'emoji' => '🇬🇱',
            'category' => 8,
            'name' => 'flag: Greenland',
            'version' => '2.0'
        ], [
            'emoji' => '🇬🇲',
            'category' => 8,
            'name' => 'flag: Gambia',
            'version' => '2.0'
        ], [
            'emoji' => '🇬🇳',
            'category' => 8,
            'name' => 'flag: Guinea',
            'version' => '2.0'
        ], [
            'emoji' => '🇬🇵',
            'category' => 8,
            'name' => 'flag: Guadeloupe',
            'version' => '2.0'
        ], [
            'emoji' => '🇬🇶',
            'category' => 8,
            'name' => 'flag: Equatorial Guinea',
            'version' => '2.0'
        ], [
            'emoji' => '🇬🇷',
            'category' => 8,
            'name' => 'flag: Greece',
            'version' => '2.0'
        ], [
            'emoji' => '🇬🇸',
            'category' => 8,
            'name' => 'flag: South Georgia & South Sandwich Islands',
            'version' => '2.0'
        ], [
            'emoji' => '🇬🇹',
            'category' => 8,
            'name' => 'flag: Guatemala',
            'version' => '2.0'
        ], [
            'emoji' => '🇬🇺',
            'category' => 8,
            'name' => 'flag: Guam',
            'version' => '2.0'
        ], [
            'emoji' => '🇬🇼',
            'category' => 8,
            'name' => 'flag: Guinea-Bissau',
            'version' => '2.0'
        ], [
            'emoji' => '🇬🇾',
            'category' => 8,
            'name' => 'flag: Guyana',
            'version' => '2.0'
        ], [
            'emoji' => '🇭🇰',
            'category' => 8,
            'name' => 'flag: Hong Kong SAR China',
            'version' => '2.0'
        ], [
            'emoji' => '🇭🇲',
            'category' => 8,
            'name' => 'flag: Heard & McDonald Islands',
            'version' => '2.0'
        ], [
            'emoji' => '🇭🇳',
            'category' => 8,
            'name' => 'flag: Honduras',
            'version' => '2.0'
        ], [
            'emoji' => '🇭🇷',
            'category' => 8,
            'name' => 'flag: Croatia',
            'version' => '2.0'
        ], [
            'emoji' => '🇭🇹',
            'category' => 8,
            'name' => 'flag: Haiti',
            'version' => '2.0'
        ], [
            'emoji' => '🇭🇺',
            'category' => 8,
            'name' => 'flag: Hungary',
            'version' => '2.0'
        ], [
            'emoji' => '🇮🇨',
            'category' => 8,
            'name' => 'flag: Canary Islands',
            'version' => '2.0'
        ], [
            'emoji' => '🇮🇩',
            'category' => 8,
            'name' => 'flag: Indonesia',
            'version' => '2.0'
        ], [
            'emoji' => '🇮🇪',
            'category' => 8,
            'name' => 'flag: Ireland',
            'version' => '2.0'
        ], [
            'emoji' => '🇮🇱',
            'category' => 8,
            'name' => 'flag: Israel',
            'version' => '2.0'
        ], [
            'emoji' => '🇮🇲',
            'category' => 8,
            'name' => 'flag: Isle of Man',
            'version' => '2.0'
        ], [
            'emoji' => '🇮🇳',
            'category' => 8,
            'name' => 'flag: India',
            'version' => '2.0'
        ], [
            'emoji' => '🇮🇴',
            'category' => 8,
            'name' => 'flag: British Indian Ocean Territory',
            'version' => '2.0'
        ], [
            'emoji' => '🇮🇶',
            'category' => 8,
            'name' => 'flag: Iraq',
            'version' => '2.0'
        ], [
            'emoji' => '🇮🇷',
            'category' => 8,
            'name' => 'flag: Iran',
            'version' => '2.0'
        ], [
            'emoji' => '🇮🇸',
            'category' => 8,
            'name' => 'flag: Iceland',
            'version' => '2.0'
        ], [
            'emoji' => '🇮🇹',
            'category' => 8,
            'name' => 'flag: Italy',
            'version' => '1.0'
        ], [
            'emoji' => '🇯🇪',
            'category' => 8,
            'name' => 'flag: Jersey',
            'version' => '2.0'
        ], [
            'emoji' => '🇯🇲',
            'category' => 8,
            'name' => 'flag: Jamaica',
            'version' => '2.0'
        ], [
            'emoji' => '🇯🇴',
            'category' => 8,
            'name' => 'flag: Jordan',
            'version' => '2.0'
        ], [
            'emoji' => '🇯🇵',
            'category' => 8,
            'name' => 'flag: Japan',
            'version' => '1.0'
        ], [
            'emoji' => '🇰🇪',
            'category' => 8,
            'name' => 'flag: Kenya',
            'version' => '2.0'
        ], [
            'emoji' => '🇰🇬',
            'category' => 8,
            'name' => 'flag: Kyrgyzstan',
            'version' => '2.0'
        ], [
            'emoji' => '🇰🇭',
            'category' => 8,
            'name' => 'flag: Cambodia',
            'version' => '2.0'
        ], [
            'emoji' => '🇰🇮',
            'category' => 8,
            'name' => 'flag: Kiribati',
            'version' => '2.0'
        ], [
            'emoji' => '🇰🇲',
            'category' => 8,
            'name' => 'flag: Comoros',
            'version' => '2.0'
        ], [
            'emoji' => '🇰🇳',
            'category' => 8,
            'name' => 'flag: St. Kitts & Nevis',
            'version' => '2.0'
        ], [
            'emoji' => '🇰🇵',
            'category' => 8,
            'name' => 'flag: North Korea',
            'version' => '2.0'
        ], [
            'emoji' => '🇰🇷',
            'category' => 8,
            'name' => 'flag: South Korea',
            'version' => '1.0'
        ], [
            'emoji' => '🇰🇼',
            'category' => 8,
            'name' => 'flag: Kuwait',
            'version' => '2.0'
        ], [
            'emoji' => '🇰🇾',
            'category' => 8,
            'name' => 'flag: Cayman Islands',
            'version' => '2.0'
        ], [
            'emoji' => '🇰🇿',
            'category' => 8,
            'name' => 'flag: Kazakhstan',
            'version' => '2.0'
        ], [
            'emoji' => '🇱🇦',
            'category' => 8,
            'name' => 'flag: Laos',
            'version' => '2.0'
        ], [
            'emoji' => '🇱🇧',
            'category' => 8,
            'name' => 'flag: Lebanon',
            'version' => '2.0'
        ], [
            'emoji' => '🇱🇨',
            'category' => 8,
            'name' => 'flag: St. Lucia',
            'version' => '2.0'
        ], [
            'emoji' => '🇱🇮',
            'category' => 8,
            'name' => 'flag: Liechtenstein',
            'version' => '2.0'
        ], [
            'emoji' => '🇱🇰',
            'category' => 8,
            'name' => 'flag: Sri Lanka',
            'version' => '2.0'
        ], [
            'emoji' => '🇱🇷',
            'category' => 8,
            'name' => 'flag: Liberia',
            'version' => '2.0'
        ], [
            'emoji' => '🇱🇸',
            'category' => 8,
            'name' => 'flag: Lesotho',
            'version' => '2.0'
        ], [
            'emoji' => '🇱🇹',
            'category' => 8,
            'name' => 'flag: Lithuania',
            'version' => '2.0'
        ], [
            'emoji' => '🇱🇺',
            'category' => 8,
            'name' => 'flag: Luxembourg',
            'version' => '2.0'
        ], [
            'emoji' => '🇱🇻',
            'category' => 8,
            'name' => 'flag: Latvia',
            'version' => '2.0'
        ], [
            'emoji' => '🇱🇾',
            'category' => 8,
            'name' => 'flag: Libya',
            'version' => '2.0'
        ], [
            'emoji' => '🇲🇦',
            'category' => 8,
            'name' => 'flag: Morocco',
            'version' => '2.0'
        ], [
            'emoji' => '🇲🇨',
            'category' => 8,
            'name' => 'flag: Monaco',
            'version' => '2.0'
        ], [
            'emoji' => '🇲🇩',
            'category' => 8,
            'name' => 'flag: Moldova',
            'version' => '2.0'
        ], [
            'emoji' => '🇲🇪',
            'category' => 8,
            'name' => 'flag: Montenegro',
            'version' => '2.0'
        ], [
            'emoji' => '🇲🇫',
            'category' => 8,
            'name' => 'flag: St. Martin',
            'version' => '2.0'
        ], [
            'emoji' => '🇲🇬',
            'category' => 8,
            'name' => 'flag: Madagascar',
            'version' => '2.0'
        ], [
            'emoji' => '🇲🇭',
            'category' => 8,
            'name' => 'flag: Marshall Islands',
            'version' => '2.0'
        ], [
            'emoji' => '🇲🇰',
            'category' => 8,
            'name' => 'flag: North Macedonia',
            'version' => '2.0'
        ], [
            'emoji' => '🇲🇱',
            'category' => 8,
            'name' => 'flag: Mali',
            'version' => '2.0'
        ], [
            'emoji' => '🇲🇲',
            'category' => 8,
            'name' => 'flag: Myanmar (Burma)',
            'version' => '2.0'
        ], [
            'emoji' => '🇲🇳',
            'category' => 8,
            'name' => 'flag: Mongolia',
            'version' => '2.0'
        ], [
            'emoji' => '🇲🇴',
            'category' => 8,
            'name' => 'flag: Macao SAR China',
            'version' => '2.0'
        ], [
            'emoji' => '🇲🇵',
            'category' => 8,
            'name' => 'flag: Northern Mariana Islands',
            'version' => '2.0'
        ], [
            'emoji' => '🇲🇶',
            'category' => 8,
            'name' => 'flag: Martinique',
            'version' => '2.0'
        ], [
            'emoji' => '🇲🇷',
            'category' => 8,
            'name' => 'flag: Mauritania',
            'version' => '2.0'
        ], [
            'emoji' => '🇲🇸',
            'category' => 8,
            'name' => 'flag: Montserrat',
            'version' => '2.0'
        ], [
            'emoji' => '🇲🇹',
            'category' => 8,
            'name' => 'flag: Malta',
            'version' => '2.0'
        ], [
            'emoji' => '🇲🇺',
            'category' => 8,
            'name' => 'flag: Mauritius',
            'version' => '2.0'
        ], [
            'emoji' => '🇲🇻',
            'category' => 8,
            'name' => 'flag: Maldives',
            'version' => '2.0'
        ], [
            'emoji' => '🇲🇼',
            'category' => 8,
            'name' => 'flag: Malawi',
            'version' => '2.0'
        ], [
            'emoji' => '🇲🇽',
            'category' => 8,
            'name' => 'flag: Mexico',
            'version' => '2.0'
        ], [
            'emoji' => '🇲🇾',
            'category' => 8,
            'name' => 'flag: Malaysia',
            'version' => '2.0'
        ], [
            'emoji' => '🇲🇿',
            'category' => 8,
            'name' => 'flag: Mozambique',
            'version' => '2.0'
        ], [
            'emoji' => '🇳🇦',
            'category' => 8,
            'name' => 'flag: Namibia',
            'version' => '2.0'
        ], [
            'emoji' => '🇳🇨',
            'category' => 8,
            'name' => 'flag: New Caledonia',
            'version' => '2.0'
        ], [
            'emoji' => '🇳🇪',
            'category' => 8,
            'name' => 'flag: Niger',
            'version' => '2.0'
        ], [
            'emoji' => '🇳🇫',
            'category' => 8,
            'name' => 'flag: Norfolk Island',
            'version' => '2.0'
        ], [
            'emoji' => '🇳🇬',
            'category' => 8,
            'name' => 'flag: Nigeria',
            'version' => '2.0'
        ], [
            'emoji' => '🇳🇮',
            'category' => 8,
            'name' => 'flag: Nicaragua',
            'version' => '2.0'
        ], [
            'emoji' => '🇳🇱',
            'category' => 8,
            'name' => 'flag: Netherlands',
            'version' => '2.0'
        ], [
            'emoji' => '🇳🇴',
            'category' => 8,
            'name' => 'flag: Norway',
            'version' => '2.0'
        ], [
            'emoji' => '🇳🇵',
            'category' => 8,
            'name' => 'flag: Nepal',
            'version' => '2.0'
        ], [
            'emoji' => '🇳🇷',
            'category' => 8,
            'name' => 'flag: Nauru',
            'version' => '2.0'
        ], [
            'emoji' => '🇳🇺',
            'category' => 8,
            'name' => 'flag: Niue',
            'version' => '2.0'
        ], [
            'emoji' => '🇳🇿',
            'category' => 8,
            'name' => 'flag: New Zealand',
            'version' => '2.0'
        ], [
            'emoji' => '🇴🇲',
            'category' => 8,
            'name' => 'flag: Oman',
            'version' => '2.0'
        ], [
            'emoji' => '🇵🇦',
            'category' => 8,
            'name' => 'flag: Panama',
            'version' => '2.0'
        ], [
            'emoji' => '🇵🇪',
            'category' => 8,
            'name' => 'flag: Peru',
            'version' => '2.0'
        ], [
            'emoji' => '🇵🇫',
            'category' => 8,
            'name' => 'flag: French Polynesia',
            'version' => '2.0'
        ], [
            'emoji' => '🇵🇬',
            'category' => 8,
            'name' => 'flag: Papua New Guinea',
            'version' => '2.0'
        ], [
            'emoji' => '🇵🇭',
            'category' => 8,
            'name' => 'flag: Philippines',
            'version' => '2.0'
        ], [
            'emoji' => '🇵🇰',
            'category' => 8,
            'name' => 'flag: Pakistan',
            'version' => '2.0'
        ], [
            'emoji' => '🇵🇱',
            'category' => 8,
            'name' => 'flag: Poland',
            'version' => '2.0'
        ], [
            'emoji' => '🇵🇲',
            'category' => 8,
            'name' => 'flag: St. Pierre & Miquelon',
            'version' => '2.0'
        ], [
            'emoji' => '🇵🇳',
            'category' => 8,
            'name' => 'flag: Pitcairn Islands',
            'version' => '2.0'
        ], [
            'emoji' => '🇵🇷',
            'category' => 8,
            'name' => 'flag: Puerto Rico',
            'version' => '2.0'
        ], [
            'emoji' => '🇵🇸',
            'category' => 8,
            'name' => 'flag: Palestinian Territories',
            'version' => '2.0'
        ], [
            'emoji' => '🇵🇹',
            'category' => 8,
            'name' => 'flag: Portugal',
            'version' => '2.0'
        ], [
            'emoji' => '🇵🇼',
            'category' => 8,
            'name' => 'flag: Palau',
            'version' => '2.0'
        ], [
            'emoji' => '🇵🇾',
            'category' => 8,
            'name' => 'flag: Paraguay',
            'version' => '2.0'
        ], [
            'emoji' => '🇶🇦',
            'category' => 8,
            'name' => 'flag: Qatar',
            'version' => '2.0'
        ], [
            'emoji' => '🇷🇪',
            'category' => 8,
            'name' => 'flag: Réunion',
            'version' => '2.0'
        ], [
            'emoji' => '🇷🇴',
            'category' => 8,
            'name' => 'flag: Romania',
            'version' => '2.0'
        ], [
            'emoji' => '🇷🇸',
            'category' => 8,
            'name' => 'flag: Serbia',
            'version' => '2.0'
        ], [
            'emoji' => '🇷🇺',
            'category' => 8,
            'name' => 'flag: Russia',
            'version' => '1.0'
        ], [
            'emoji' => '🇷🇼',
            'category' => 8,
            'name' => 'flag: Rwanda',
            'version' => '2.0'
        ], [
            'emoji' => '🇸🇦',
            'category' => 8,
            'name' => 'flag: Saudi Arabia',
            'version' => '2.0'
        ], [
            'emoji' => '🇸🇧',
            'category' => 8,
            'name' => 'flag: Solomon Islands',
            'version' => '2.0'
        ], [
            'emoji' => '🇸🇨',
            'category' => 8,
            'name' => 'flag: Seychelles',
            'version' => '2.0'
        ], [
            'emoji' => '🇸🇩',
            'category' => 8,
            'name' => 'flag: Sudan',
            'version' => '2.0'
        ], [
            'emoji' => '🇸🇪',
            'category' => 8,
            'name' => 'flag: Sweden',
            'version' => '2.0'
        ], [
            'emoji' => '🇸🇬',
            'category' => 8,
            'name' => 'flag: Singapore',
            'version' => '2.0'
        ], [
            'emoji' => '🇸🇭',
            'category' => 8,
            'name' => 'flag: St. Helena',
            'version' => '2.0'
        ], [
            'emoji' => '🇸🇮',
            'category' => 8,
            'name' => 'flag: Slovenia',
            'version' => '2.0'
        ], [
            'emoji' => '🇸🇯',
            'category' => 8,
            'name' => 'flag: Svalbard & Jan Mayen',
            'version' => '2.0'
        ], [
            'emoji' => '🇸🇰',
            'category' => 8,
            'name' => 'flag: Slovakia',
            'version' => '2.0'
        ], [
            'emoji' => '🇸🇱',
            'category' => 8,
            'name' => 'flag: Sierra Leone',
            'version' => '2.0'
        ], [
            'emoji' => '🇸🇲',
            'category' => 8,
            'name' => 'flag: San Marino',
            'version' => '2.0'
        ], [
            'emoji' => '🇸🇳',
            'category' => 8,
            'name' => 'flag: Senegal',
            'version' => '2.0'
        ], [
            'emoji' => '🇸🇴',
            'category' => 8,
            'name' => 'flag: Somalia',
            'version' => '2.0'
        ], [
            'emoji' => '🇸🇷',
            'category' => 8,
            'name' => 'flag: Suriname',
            'version' => '2.0'
        ], [
            'emoji' => '🇸🇸',
            'category' => 8,
            'name' => 'flag: South Sudan',
            'version' => '2.0'
        ], [
            'emoji' => '🇸🇹',
            'category' => 8,
            'name' => 'flag: São Tomé & Príncipe',
            'version' => '2.0'
        ], [
            'emoji' => '🇸🇻',
            'category' => 8,
            'name' => 'flag: El Salvador',
            'version' => '2.0'
        ], [
            'emoji' => '🇸🇽',
            'category' => 8,
            'name' => 'flag: Sint Maarten',
            'version' => '2.0'
        ], [
            'emoji' => '🇸🇾',
            'category' => 8,
            'name' => 'flag: Syria',
            'version' => '2.0'
        ], [
            'emoji' => '🇸🇿',
            'category' => 8,
            'name' => 'flag: Eswatini',
            'version' => '2.0'
        ], [
            'emoji' => '🇹🇦',
            'category' => 8,
            'name' => 'flag: Tristan da Cunha',
            'version' => '2.0'
        ], [
            'emoji' => '🇹🇨',
            'category' => 8,
            'name' => 'flag: Turks & Caicos Islands',
            'version' => '2.0'
        ], [
            'emoji' => '🇹🇩',
            'category' => 8,
            'name' => 'flag: Chad',
            'version' => '2.0'
        ], [
            'emoji' => '🇹🇫',
            'category' => 8,
            'name' => 'flag: French Southern Territories',
            'version' => '2.0'
        ], [
            'emoji' => '🇹🇬',
            'category' => 8,
            'name' => 'flag: Togo',
            'version' => '2.0'
        ], [
            'emoji' => '🇹🇭',
            'category' => 8,
            'name' => 'flag: Thailand',
            'version' => '2.0'
        ], [
            'emoji' => '🇹🇯',
            'category' => 8,
            'name' => 'flag: Tajikistan',
            'version' => '2.0'
        ], [
            'emoji' => '🇹🇰',
            'category' => 8,
            'name' => 'flag: Tokelau',
            'version' => '2.0'
        ], [
            'emoji' => '🇹🇱',
            'category' => 8,
            'name' => 'flag: Timor-Leste',
            'version' => '2.0'
        ], [
            'emoji' => '🇹🇲',
            'category' => 8,
            'name' => 'flag: Turkmenistan',
            'version' => '2.0'
        ], [
            'emoji' => '🇹🇳',
            'category' => 8,
            'name' => 'flag: Tunisia',
            'version' => '2.0'
        ], [
            'emoji' => '🇹🇴',
            'category' => 8,
            'name' => 'flag: Tonga',
            'version' => '2.0'
        ], [
            'emoji' => '🇹🇷',
            'category' => 8,
            'name' => 'flag: Turkey',
            'version' => '2.0'
        ], [
            'emoji' => '🇹🇹',
            'category' => 8,
            'name' => 'flag: Trinidad & Tobago',
            'version' => '2.0'
        ], [
            'emoji' => '🇹🇻',
            'category' => 8,
            'name' => 'flag: Tuvalu',
            'version' => '2.0'
        ], [
            'emoji' => '🇹🇼',
            'category' => 8,
            'name' => 'flag: Taiwan',
            'version' => '2.0'
        ], [
            'emoji' => '🇹🇿',
            'category' => 8,
            'name' => 'flag: Tanzania',
            'version' => '2.0'
        ], [
            'emoji' => '🇺🇦',
            'category' => 8,
            'name' => 'flag: Ukraine',
            'version' => '2.0'
        ], [
            'emoji' => '🇺🇬',
            'category' => 8,
            'name' => 'flag: Uganda',
            'version' => '2.0'
        ], [
            'emoji' => '🇺🇲',
            'category' => 8,
            'name' => 'flag: U.S. Outlying Islands',
            'version' => '2.0'
        ], [
            'emoji' => '🇺🇳',
            'category' => 8,
            'name' => 'flag: United Nations',
            'version' => '4.0'
        ], [
            'emoji' => '🇺🇸',
            'category' => 8,
            'name' => 'flag: United States',
            'version' => '1.0'
        ], [
            'emoji' => '🇺🇾',
            'category' => 8,
            'name' => 'flag: Uruguay',
            'version' => '2.0'
        ], [
            'emoji' => '🇺🇿',
            'category' => 8,
            'name' => 'flag: Uzbekistan',
            'version' => '2.0'
        ], [
            'emoji' => '🇻🇦',
            'category' => 8,
            'name' => 'flag: Vatican City',
            'version' => '2.0'
        ], [
            'emoji' => '🇻🇨',
            'category' => 8,
            'name' => 'flag: St. Vincent & Grenadines',
            'version' => '2.0'
        ], [
            'emoji' => '🇻🇪',
            'category' => 8,
            'name' => 'flag: Venezuela',
            'version' => '2.0'
        ], [
            'emoji' => '🇻🇬',
            'category' => 8,
            'name' => 'flag: British Virgin Islands',
            'version' => '2.0'
        ], [
            'emoji' => '🇻🇮',
            'category' => 8,
            'name' => 'flag: U.S. Virgin Islands',
            'version' => '2.0'
        ], [
            'emoji' => '🇻🇳',
            'category' => 8,
            'name' => 'flag: Vietnam',
            'version' => '2.0'
        ], [
            'emoji' => '🇻🇺',
            'category' => 8,
            'name' => 'flag: Vanuatu',
            'version' => '2.0'
        ], [
            'emoji' => '🇼🇫',
            'category' => 8,
            'name' => 'flag: Wallis & Futuna',
            'version' => '2.0'
        ], [
            'emoji' => '🇼🇸',
            'category' => 8,
            'name' => 'flag: Samoa',
            'version' => '2.0'
        ], [
            'emoji' => '🇽🇰',
            'category' => 8,
            'name' => 'flag: Kosovo',
            'version' => '2.0'
        ], [
            'emoji' => '🇾🇪',
            'category' => 8,
            'name' => 'flag: Yemen',
            'version' => '2.0'
        ], [
            'emoji' => '🇾🇹',
            'category' => 8,
            'name' => 'flag: Mayotte',
            'version' => '2.0'
        ], [
            'emoji' => '🇿🇦',
            'category' => 8,
            'name' => 'flag: South Africa',
            'version' => '2.0'
        ], [
            'emoji' => '🇿🇲',
            'category' => 8,
            'name' => 'flag: Zambia',
            'version' => '2.0'
        ], [
            'emoji' => '🇿🇼',
            'category' => 8,
            'name' => 'flag: Zimbabwe',
            'version' => '2.0'
        ], [
            'emoji' => '🏴󠁧󠁢󠁥󠁮󠁧󠁿',
            'category' => 8,
            'name' => 'flag: England',
            'version' => '5.0'
        ], [
            'emoji' => '🏴󠁧󠁢󠁳󠁣󠁴󠁿',
            'category' => 8,
            'name' => 'flag: Scotland',
            'version' => '5.0'
        ], [
            'emoji' => '🏴󠁧󠁢󠁷󠁬󠁳󠁿',
            'category' => 8,
            'name' => 'flag: Wales',
            'version' => '5.0'
        ],
       ],
    ];

    public static function all($version = '12.0'): array
    {
        $output = static::MAPPING['categories'];

        foreach (static::MAPPING['emoji'] as $emoji) {
            if (version_compare($emoji['version'], $version, '<=')) {
                $output[$emoji['category']]['emoji'][] = [
                    'emoji' => $emoji['emoji'],
                    'name' => strtolower($emoji['name']),
                ];
            }
        }

        return $output;
    }

    public static function allFlat($version = '12.0'): array
    {
        $output = [];

        foreach (static::MAPPING['emoji'] as $emoji) {
            if (version_compare($emoji['version'], $version, '<=')) {
                $output[$emoji['emoji']] = $emoji['emoji'];
            }
        }

        return $output;
    }

    public static function random($version = '12.0'): string
    {
        $all = array_filter(static::MAPPING['emoji'], function ($emoji) use ($version) {
            return version_compare($emoji['version'], $version, '<=');
        });

        $all = array_values($all);

        return $all[random_int(0, count($all) - 1)]['emoji'];
    }
}
