<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Dictionary;

class DictionarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dictionaries')->insert([
        
            'keywordId'=>'1',
            'keywordName'=>'absolute',
            'mainTermId' => '1',
        ]);
            
        DB::table('dictionaries')->insert([   

            'keywordId'=>'2',
            'keywordName'=>'performance',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([
        
            'keywordId'=>'3',
            'keywordName'=>'abstract',
            'mainTermId' => '1',
            ]);
    
        DB::table('dictionaries')->insert([
            'keywordId'=>'4',
            'keywordName'=>'structure',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([
            'keywordId'=>'5',
            'keywordName'=>'acyclic',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'6',
            'keywordName'=>'graph',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'7',
            'keywordName'=>'heap',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'8',
            'keywordName'=>'huffman',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'9',
            'keywordName'=>'coding',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'10',
            'keywordName'=>'array',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'11',
            'keywordName'=>'merg',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'12',
            'keywordName'=>'asymptotic',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'13',
            'keywordName'=>'complexity',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'14',
            'keywordName'=>'augmenting',
            'mainTermId' => '1',
            
            ]);

        DB::table('dictionaries')->insert([
            'keywordId'=>'15',
            'keywordName'=>'backtracking',
            'mainTermId' => '1',

            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'16',
            'keywordName'=>'binary',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'17',
            'keywordName'=>'quicksort',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'18',
            'keywordName'=>'binarytree',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'19',
            'keywordName'=>'binomial',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'20',
            'keywordName'=>'big-O',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'21',
            'keywordName'=>'boolean',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([
            'keywordId'=>'22',
            'keywordName'=>'breadth-first',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'23',
            'keywordName'=>'bubblesort',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'24',
            'keywordName'=>'B-tree',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'25',
            'keywordName'=>'chain',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'26',
            'keywordName'=>'queue',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'27',
            'keywordName'=>'depth-first',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'28',
            'keywordName'=>'descendant',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'29',
            'keywordName'=>'deterministic',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([
            'keywordId'=>'30',
            'keywordName'=>'dichotomic',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'31',
            'keywordName'=>'disjunction',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'32',
            'keywordName'=>'conquer',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'33',
            'keywordName'=>'division',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'34',
            'keywordName'=>'hashing',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'35',
            'keywordName'=>'linkedlist',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'36',
            'keywordName'=>'dynamic',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'37',
            'keywordName'=>'programming',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'38',
            'keywordName'=>'argument',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'39',
            'keywordName'=>'prefix',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'40',
            'keywordName'=>'function',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'41',
            'keywordName'=>'recursive',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'42',
            'keywordName'=>'permutation',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'43',
            'keywordName'=>'polynomial',
            'mainTermId' => '1',
            ]);
        DB::table('dictionaries')->insert([

            'keywordId'=>'44',
            'keywordName'=>'pointer',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([
            'keywordId'=>'45',
            'keywordName'=>'pre-order',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'46',
            'keywordName'=>'traversal',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([
            'keywordId'=>'47',
            'keywordName'=>'priority',
            'mainTermId' => '1',

            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'48',
            'keywordName'=>'probe',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'49',
            'keywordName'=>'algebra',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'50',
            'keywordName'=>'datastructure',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'51',
            'keywordName'=>'finite-state-machine',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([
            'keywordId'=>'52',
            'keywordName'=>'factorial',
            'mainTermId' => '1',
            ]);


        DB::table('dictionaries')->insert([
            'keywordId'=>'53',
            'keywordName'=>'Fibonaccian',
            'mainTermId' => '1',
            ]);
  
        DB::table('dictionaries')->insert([
            'keywordId'=>'54',
            'keywordName'=>'Fourier',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([
            'keywordId'=>'55',
            'keywordName'=>'conservation',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([
            'keywordId'=>'56',
            'keywordName'=>'fractionaln',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([
            'keywordId'=>'57',
            'keywordName'=>'persistent',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([
            'keywordId'=>'58',
            'keywordName'=>'coloring',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([
            'keywordId'=>'59',
            'keywordName'=>'optimum',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([
            'keywordId'=>'60',
            'keywordName'=>'gamma',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([
            'keywordId'=>'61',
            'keywordName'=>'greedy',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([
            'keywordId'=>'62',
            'keywordName'=>'heuristic',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([
            'keywordId'=>'63',
            'keywordName'=>'grid',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([
            'keywordId'=>'64',
            'keywordName'=>'Hamming',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([
            'keywordId'=>'65',
            'keywordName'=>'heapsort',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([
            'keywordId'=>'66',
            'keywordName'=>'heuristic',
            'mainTermId' => '1',
            ]);

          DB::table('dictionaries')->insert([
            'keywordId'=>'67',
            'keywordName'=>'hidden-Markov-model',
            'mainTermId' => '1',
            ]);

          DB::table('dictionaries')->insert([
            'keywordId'=>'68',
            'keywordName'=>'in-order',
            'mainTermId' => '1',
            ]);
  
            DB::table('dictionaries')->insert([
            'keywordId'=>'69',
            'keywordName'=>'insertion',
            'mainTermId' => '1',
            ]);

              DB::table('dictionaries')->insert([
            'keywordId'=>'70',
            'keywordName'=>'linear-program',
            'mainTermId' => '1',
            ]);
            DB::table('dictionaries')->insert([
            'keywordId'=>'71',
            'keywordName'=>'inference',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'72',
            'keywordName'=>'expertise',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'73',
            'keywordName'=>'discriminative',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'74',
            'keywordName'=>'variants',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'75',
            'keywordName'=>'precomputed',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'76',
            'keywordName'=>'fuzzy',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'77',
            'keywordName'=>'asynchrony',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'78',
            'keywordName'=>'propositional',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'79',
            'keywordName'=>'modus',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'80',
            'keywordName'=>'tollens',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'81',
            'keywordName'=>'predicate',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'82',
            'keywordName'=>'semantics',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'83',
            'keywordName'=>'natural',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'84',
            'keywordName'=>'language',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'85',
            'keywordName'=>'forward',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'86',
            'keywordName'=>'chaining',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'87',
            'keywordName'=>'artificial',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'88',
            'keywordName'=>'intelligence',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'89',
            'keywordName'=>'frame',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'90',
            'keywordName'=>'ponens',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'91',
            'keywordName'=>'learning',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'92',
            'keywordName'=>'regularizer',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'93',
            'keywordName'=>'textual',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'94',
            'keywordName'=>'firing',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'95',
            'keywordName'=>'stochastic',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'96',
            'keywordName'=>'syntax',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'97',
            'keywordName'=>'framework',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'98',
            'keywordName'=>'experts',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'99',
            'keywordName'=>'embedding',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'100',
            'keywordName'=>'entropy',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'101',
            'keywordName'=>'tenant',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'102',
            'keywordName'=>'models',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'103',
            'keywordName'=>'synthesis',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'104',
            'keywordName'=>'homogeneous',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'105',
            'keywordName'=>'semantic',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'106',
            'keywordName'=>'nets',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'107',
            'keywordName'=>'prediction',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'108',
            'keywordName'=>'gradient',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'109',
            'keywordName'=>'morphology',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'110',
            'keywordName'=>'insights',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'111',
            'keywordName'=>'goal-seeking',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'112',
            'keywordName'=>'heuristic',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([
        

            'keywordId'=>'113',
            'keywordName'=>'reasoning',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'114',
            'keywordName'=>'inference',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'115',
            'keywordName'=>'engine',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'116',
            'keywordName'=>'intelligent',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'117',
            'keywordName'=>'agent',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'118',
            'keywordName'=>'propositional',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'119',
            'keywordName'=>'scripting',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'120',
            'keywordName'=>'prolog',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'121',
            'keywordName'=>'backward',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'122',
            'keywordName'=>'forward',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'123',
            'keywordName'=>'game',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'124',
            'keywordName'=>'planning',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'125',
            'keywordName'=>'conceptual',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'126',
            'keywordName'=>'dependency',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'127',
            'keywordName'=>'cloud computing',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([
           'keywordId'=>'128',
            'keywordName'=>'bandwidth',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'129',
            'keywordName'=>'topologies',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'130',
            'keywordName'=>'gradient',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'131',
            'keywordName'=>'architecture',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'132',
            'keywordName'=>'access',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'133',
            'keywordName'=>'adjacent',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'134',
            'keywordName'=>'descent',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'135',
            'keywordName'=>'analog',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'136',
            'keywordName'=>'api',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'137',
            'keywordName'=>'ascii',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'138',
            'keywordName'=>'distributed',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'139',
            'keywordName'=>'aui',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'140',
            'keywordName'=>'attenuation',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'141',
            'keywordName'=>'atmd ',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'142',
            'keywordName'=>'delays',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'143',
            'keywordName'=>'bandwidth',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'144',
            'keywordName'=>'basestation',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'145',
            'keywordName'=>'baseband',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'146',
            'keywordName'=>'insights',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'147',
            'keywordName'=>'block',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'148',
            'keywordName'=>'blockage',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'149',
            'keywordName'=>'setup',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'150',
            'keywordName'=>'computing',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'151',
            'keywordName'=>'cdma',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'152',
            'keywordName'=>'cell',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'153',
            'keywordName'=>'splitting',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'154',
            'keywordName'=>'cellular',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'155',
            'keywordName'=>'channel',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'156',
            'keywordName'=>'prototype',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'157',
            'keywordName'=>'hop',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'158',
            'keywordName'=>'mobile',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'159',
            'keywordName'=>'crosstalk',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'160',
            'keywordName'=>'csma/ca',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'161',
            'keywordName'=>'csma/cd',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'162',
            'keywordName'=>'caching',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'163',
            'keywordName'=>'decompression',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'164',
            'keywordName'=>'assistant',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'165',
            'keywordName'=>'dedicated',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'166',
            'keywordName'=>'downlink',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'167',
            'keywordName'=>'driver',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'168',
            'keywordName'=>'dsu',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'169',
            'keywordName'=>'dual-mode',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'170',
            'keywordName'=>'duplex',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'171',
            'keywordName'=>'electromagnetic',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'172',
            'keywordName'=>'encryption',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'173',
            'keywordName'=>'delivery',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'174',
            'keywordName'=>'erlang',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'175',
            'keywordName'=>'fading',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'176',
            'keywordName'=>'firewall',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'177',
            'keywordName'=>'fdma',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'178',
            'keywordName'=>'frequency',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'179',
            'keywordName'=>'geosynchronous',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'180',
            'keywordName'=>'handoff',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'181',
            'keywordName'=>'hopping',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'182',
            'keywordName'=>'host',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'183',
            'keywordName'=>'callbacks',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'184',
            'keywordName'=>'infrared',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'185',
            'keywordName'=>'infrastructure',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'186',
            'keywordName'=>'ka-band',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'187',
            'keywordName'=>'laser',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'188',
            'keywordName'=>'line-of-sight',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'189',
            'keywordName'=>'loop ',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'190',
            'keywordName'=>'directory',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'191',
            'keywordName'=>'man',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'192',
            'keywordName'=>'mbps',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'193',
            'keywordName'=>'narrow',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'194',
            'keywordName'=>'interface',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'195',
            'keywordName'=>'metrics',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'196',
            'keywordName'=>'point-of-presence',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'197',
            'keywordName'=>'portable',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'198',
            'keywordName'=>'roaming',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'199',
            'keywordName'=>'router',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'200',
            'keywordName'=>'message',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'201',
            'keywordName'=>'Wide Area Network',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'202',
            'keywordName'=>'Android',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'203',
            'keywordName'=>'Arduino',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'204',
            'keywordName'=>'Servlets',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'205',
            'keywordName'=>'Socket Programming',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'206',
            'keywordName'=>'.NET',
            'mainTermId' => '7',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'207',
            'keywordName'=>'ASP.NET',
            'mainTermId' => '7',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'208',
            'keywordName'=>'ASP.NET MVC',
            'mainTermId' => '7',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'209',
            'keywordName'=>'C',
            'mainTermId' => '7',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'210',
            'keywordName'=>'C#',
            'mainTermId' => '7',
            ]);

            
            
              DB::table('dictionaries')->insert([
            'keywordId'=>'211',
            'keywordName'=>'C++',
            'mainTermId' => '7',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'212',
            'keywordName'=>'CakePHP',
            'mainTermId' => '7',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'213',
            'keywordName'=>'Core Java',
            'mainTermId' => '7',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'214',
            'keywordName'=>'Eclipse',
            'mainTermId' => '7',
              ]);

              DB::table('dictionaries')->insert([
            'keywordId'=>'215',
            'keywordName'=>'J2EE',
            'mainTermId' => '7',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'216',
            'keywordName'=>'Java',
            'mainTermId' => '7',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'217',
            'keywordName'=>'Matlab',
            'mainTermId' => '7',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'218',
            'keywordName'=>'Maven',
            'mainTermId' => '7',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'219',
            'keywordName'=>'NetBeans',
            'mainTermId' => '7',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'220',
            'keywordName'=>'PHP',
            'mainTermId' => '7',
              ]);

              DB::table('dictionaries')->insert([
            'keywordId'=>'221',
            'keywordName'=>'Python',
            'mainTermId' => '7',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'222',
            'keywordName'=>'Visual Basic',
            'mainTermId' => '7',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'223',
            'keywordName'=>'Visual C++',
            'mainTermId' => '7',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'224',
            'keywordName'=>'AJAX',
            'mainTermId' => '7',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'225',
            'keywordName'=>'CSS',
            'mainTermId' => '7',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'226',
            'keywordName'=>'HTML',
            'mainTermId' => '7',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'227',
            'keywordName'=>'HTML 5',
            'mainTermId' => '7',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'228',
            'keywordName'=>'jQuery',
            'mainTermId' => '7',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'229',
            'keywordName'=>'JSON',
            'mainTermId' => '7',
              ]);
              DB::table('dictionaries')->insert([

            'keywordId'=>'230',
            'keywordName'=>'JSP',
            'mainTermId' => '7',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'231',
            'keywordName'=>'LaTeX',
            'mainTermId' => '7',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'232',
            'keywordName'=>'XML',
            'mainTermId' => '7',
              ]);
              
              DB::table('dictionaries')->insert([  

            'keywordId'=>'233',
            'keywordName'=>'architectural',
            'mainTermId' => '27',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'234',
            'keywordName'=>'software',
            'mainTermId' => '27',
              ]);

              DB::table('dictionaries')->insert([
            'keywordId'=>'235',
            'keywordName'=>'development',
            'mainTermId' => '27',
              ]);

              DB::table('dictionaries')->insert([
            'keywordId'=>'236',
            'keywordName'=>'Linux',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'237',
            'keywordName'=>'Ubuntu',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([
            'keywordId'=>'238',
            'keywordName'=>'Windows',
            'mainTermId' => '22',
              ]);
              
              DB::table('dictionaries')->insert([

            'keywordId'=>'239',
            'keywordName'=>'Windows',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([
            'keywordId'=>'240',
            'keywordName'=>'blocked state',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'241',
            'keywordName'=>'process',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'242',
            'keywordName'=>'child',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'243',
            'keywordName'=>'kernal',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'244',
            'keywordName'=>'mode',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'245',
            'keywordName'=>'block',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'246',
            'keywordName'=>'image',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'247',
            'keywordName'=>'state',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'248',
            'keywordName'=>'roundrobin',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'249',
            'keywordName'=>'suspended',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'250',
            'keywordName'=>'swapping',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([
            'keywordId'=>'251',
            'keywordName'=>'thread',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'252',
            'keywordName'=>'microkernel',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([
            'keywordId'=>'253',
            'keywordName'=>'multithreading',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'254',
            'keywordName'=>'semaphore',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'255',
            'keywordName'=>'blocking',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([


            'keywordId'=>'256',
            'keywordName'=>'concurrency',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'257',
            'keywordName'=>'exclusion',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'258',
            'keywordName'=>'circular wait',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'259',
            'keywordName'=>'deadlock',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'260',
            'keywordName'=>'avoidance',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'261',
            'keywordName'=>'detection',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'262',
            'keywordName'=>'prevention',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'263',
            'keywordName'=>'hold and wait',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'264',
            'keywordName'=>'mutual',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'265',
            'keywordName'=>'compaction',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'266',
            'keywordName'=>'linking',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'267',
            'keywordName'=>'partitioning',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'268',
            'keywordName'=>'loading',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'269',
            'keywordName'=>'external',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'270',
            'keywordName'=>'fragmentation',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'271',
            'keywordName'=>'frame',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([
            'keywordId'=>'272',
            'keywordName'=>'internal',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'273',
            'keywordName'=>'logical',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'274',
            'keywordName'=>'memory',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'275',
            'keywordName'=>'management',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'276',
            'keywordName'=>'page table',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'277',
            'keywordName'=>'paging',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'278',
            'keywordName'=>'address',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'279',
            'keywordName'=>'relocatable',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'280',
            'keywordName'=>'relocation',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'281',
            'keywordName'=>'segmentation',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'282',
            'keywordName'=>'mapping',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'283',
            'keywordName'=>'mapping',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'284',
            'keywordName'=>'c',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'285',
            'keywordName'=>'fetch',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            
            'keywordId'=>'286',
            'keywordName'=>'locality',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'287',
            'keywordName'=>'replacement',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'288',
            'keywordName'=>'real memory',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'289',
            'keywordName'=>'lookaside',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'290',
            'keywordName'=>'buffer',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'291',
            'keywordName'=>'virtual',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'292',
            'keywordName'=>'block-oriented',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'293',
            'keywordName'=>'CD-R',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'294',
            'keywordName'=>'CD-ROM',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'295',
            'keywordName'=>'CD-RW',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'296',
            'keywordName'=>'Cylinder',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'297',
            'keywordName'=>'CD-RW',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([
             'keywordId'=>'298',
            'keywordName'=>'DVD',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'299',
            'keywordName'=>'DMA',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'300',
            'keywordName'=>'cache',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'301',
            'keywordName'=>'floppy',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'302',
            'keywordName'=>'hard disk',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'303',
            'keywordName'=>'hard disk',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            
            'keywordId'=>'304',
            'keywordName'=>'channel',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'305',
            'keywordName'=>'processor',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'306',
            'keywordName'=>'device',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'307',
            'keywordName'=>'magnetic',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'308',
            'keywordName'=>'magneto-optical',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'309',
            'keywordName'=>'magneto-optical',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            
            'keywordId'=>'310',
            'keywordName'=>'programmed',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'311',
            'keywordName'=>'read',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'312',
            'keywordName'=>'write',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'313',
            'keywordName'=>'delay',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'314',
            'keywordName'=>'I/O',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'315',
            'keywordName'=>'sector',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

             
            'keywordId'=>'316',
            'keywordName'=>'seek-yime',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'317',
            'keywordName'=>'track',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'318',
            'keywordName'=>'transfer',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'319',
            'keywordName'=>'chained',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'320',
            'keywordName'=>'allocation',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'321',
            'keywordName'=>'field',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            
            'keywordId'=>'322',
            'keywordName'=>'field',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'323',
            'keywordName'=>'FAT',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'324',
            'keywordName'=>'directory',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'325',
            'keywordName'=>'index',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'326',
            'keywordName'=>'pathname',
            'mainTermId' => '22',
              ]);

             DB::table('dictionaries')->insert([
            'keywordId'=>'327',
            'keywordName'=>'Drupal',
            'mainTermId' => '26',
              ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'328',
            'keywordName'=>'Joomla',
            'mainTermId' => '26',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'329',
            'keywordName'=>'Git',
            'mainTermId' => '26',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'330',
            'keywordName'=>'UML',
            'mainTermId' => '26',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'331',
            'keywordName'=>'Wordpress',
            'mainTermId' => '26',
              ]);


            DB::table('dictionaries')->insert([
            'keywordId'=>'332',
            'keywordName'=>'Apache',
            'mainTermId' => '12',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'333',
            'keywordName'=>'Hibernate',
            'mainTermId' => '12',
            ]);

            DB::table('dictionaries')->insert([

            
            'keywordId'=>'334',
            'keywordName'=>'Microsoft SQL Server',
            'mainTermId' => '12',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'335',
            'keywordName'=>'MongoDB',
            'mainTermId' => '12',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'336',
            'keywordName'=>'MySQL',
            'mainTermId' => '12',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'337',
            'keywordName'=>'NoSQL',
            'mainTermId' => '12',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'338',
            'keywordName'=>'Spring',
            'mainTermId' => '12',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'339',
            'keywordName'=>'Tomcat',
            'mainTermId' => '12',
            ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'340',
            'keywordName'=>'Machine',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'341',
            'keywordName'=>'Mining',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'342',
            'keywordName'=>'Learning',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'343',
            'keywordName'=>'Association',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'344',
            'keywordName'=>'Rule',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'345',
            'keywordName'=>'Information',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'346',
            'keywordName'=>'Retrieval',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'347',
            'keywordName'=>'Indexation',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'348',
            'keywordName'=>'Support',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'349',
            'keywordName'=>'Vector',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'350',
            'keywordName'=>'Clustering',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'351',
            'keywordName'=>'Filtering',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'352',
            'keywordName'=>'Satisfiability',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'353',
            'keywordName'=>'Feature',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'354',
            'keywordName'=>'Data',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'355',
            'keywordName'=>'Evaluation',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'356',
            'keywordName'=>'Decision',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'357',
            'keywordName'=>'Tree',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'358',
            'keywordName'=>'Sets',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'359',
            'keywordName'=>'Neural',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'360',
            'keywordName'=>'Network',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'361',
            'keywordName'=>'Classification',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'362',
            'keywordName'=>'Knowledge',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'363',
            'keywordName'=>'Naive',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'364',
            'keywordName'=>'Bayes',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'365',
            'keywordName'=>'Unsupervised',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'366',
            'keywordName'=>'Learning',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'367',
            'keywordName'=>'Recognition',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'368',
            'keywordName'=>'K-Means',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'369',
            'keywordName'=>'SOM',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'370',
            'keywordName'=>'Nearest',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'371',
            'keywordName'=>'Neighbor',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([
             
            'keywordId'=>'372',
            'keywordName'=>'Regression',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'373',
            'keywordName'=>'Detection',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'374',
            'keywordName'=>'Hierarchical',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'375',
            'keywordName'=>'Probabilistic',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'376',
            'keywordName'=>'Euclidean',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'377',
            'keywordName'=>'Distance',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'378',
            'keywordName'=>'Integrity',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'379',
            'keywordName'=>'Dataset',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'380',
            'keywordName'=>'Eigenvectors',
            'mainTermId' => '10',
            ]);
      }
}
