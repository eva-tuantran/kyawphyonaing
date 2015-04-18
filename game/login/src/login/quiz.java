package login;
import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;
import java.io.PrintWriter;
import java.util.*;

//countdown
class jikan extends Thread{
	public void run(){

	}
}
class gameTimer extends Thread{
	private int time;
	private int count;

	gameTimer(int t,int c){
		time = t;
		count = c;
	}

	public void run(){
		while(true){
			try{
				while(true){
					System.out.println(count);
					count--;
					Thread.sleep(time);
					if(count < 0) jikan.interrupted();
				}
			}  catch(InterruptedException e){
				break;
			}catch(Exception e){
			}

		}
	}

	/**
	 * countを取得します。
	 * @return count
	 */
	public int getCount() {
	    return count;
	}
}

//quizbox
class QuizBox{
	String answer;
	String keyWord1;
	String keyWord2;

	public String getAnswer() {
	    return answer;
	}
	public void setAnswer(String answer) {
	    this.answer = answer;
	}
	public String getKeyWord1() {
	    return keyWord1;
	}
	public void setKeyWord1(String keyWord1) {
	    this.keyWord1 = keyWord1;
	}
	public String getKeyWord2() {
	    return keyWord2;
	}
	public void setKeyWord2(String keyWord2) {
	    this.keyWord2 = keyWord2;
	}

}

class Player{
	String name;
	HashMap<String, Integer> answer;
	
	String getName() {
		return name;
	}
	public void setName(String name) {
		this.name = name;
	}
	public HashMap<String, Integer> getAnswer() {
		return answer;
	}
	public void setAnswer(HashMap<String, Integer> answer) {
		this.answer = answer;
	}
	
}


public class quiz {

	public static void main(String[] args) throws InterruptedException {
		
		String[] chooseBox = new String[4];//選択肢を入れる
		int[] chooseCheck = new int[4];//ランダム用
		int[] com = new int[100];//答えを入れる
		int[] play = new int[100];//player用
		int quizCont = 0;//問題数用
		int score = 0;//点数用
		int level = 0;//レベル用
		int tmp = 0;
		List<String> seikai = new ArrayList<String>();
		
		String[] answerInfos = new String[100];
		
		String[] headInfo = HeadInfo();
		List<QuizBox> chooselist = csvToChooselist();

		System.out.print("名前を入力してください：");
		answerInfos[0] = new Scanner(System.in).next();
		UserToCsv(headInfo, answerInfos[0]);
		List<HashMap<String, String>> scorelist = csvToScorelist(answerInfos[0]);
		
		for(int i = 0;i < chooselist.size();i++){
			com[i] = (int) Math.floor(Math.random()*chooselist.size());
			for(int j = 0;j < i;j++){
				if(com[j] == com[i] && j != i){
					i--;
					break;
				}
			}
		}

		//難易度判断
		level = levelChoose();
		switch(level){
			case 1: level = 5;break;
			case 2: level = 10;break;
			case 3: level = 15;break;
			default: level = chooselist.size()-1;
		}

		do{
			//keywordの表示
			String tmpA = chooselist.get(com[quizCont]).getKeyWord1();
			String tmpB = chooselist.get(com[quizCont]).getKeyWord2();
			keyExp(tmpA, tmpB);

			//選択肢の収納
			for(int i = 0;i < 4;i++){
				//quizboxからランダムの選択肢出す
				chooseCheck[i] = (int) Math.floor(Math.random()*chooselist.size());
				for(int j = 0;j < i;j++){
					if(chooseCheck[j] == chooseCheck[i] && i != j){
						i--;
						break;
					}
				}
				chooseBox[i] = chooselist.get(chooseCheck[i]).getAnswer();
			}

			//答え合わせ用
			String comer =chooselist.get(com[quizCont]).getAnswer();
			int numTmp = 0;
			//答えの収納
			for(int i = 0;i < 4;i++){
				//答えすでに入ってる場合
				if(chooseBox[i].equals(comer))
					break;
				numTmp++;
			}

			//答えが入ってない場合
			if(numTmp == 4) chooseBox[(int) Math.floor(Math.random()*4)] = comer;

			//選択肢の表示
			for(int i = 0;i < 4;i++)
				System.out.println((i+1)+"."+chooseBox[i]);

			play[quizCont] = scanCheck()-1;

			//答え合わせ用
			if(answerCheck(chooseBox[play[quizCont]],comer)){
				System.out.println("正解です！！");
				score++;
				seikai.add(comer);
			}else{
				System.out.print("もう少し頑張りましょう！！");
			}
			quizCont++;
			
			System.out.println(answerInfos[0]+"の点数は"+score+"点です。");
			if(quizCont == level) break;
			System.out.print("やり続けたいなら０以外の数字を入力:");
			tmp = scanCheck();
		}while(tmp != 0);

		String[] scoreTmp = null;
		for(int i = 0;i < scorelist.size();i++){
			
		}
		scoreOut(score);

		//タイマーの起動
		/*gameTimer test = new gameTimer(500,7);
		Thread jikan = new Thread();
		test.start();*/
	}

	//csvからヘッタ情報を読み込む
	public static String[] HeadInfo(){
		String[] header = null;
		try{
			FileReader fr = new FileReader("name.csv");
			BufferedReader br = new BufferedReader(fr);
			
			String line;
			int cont = 0;
			while((line = br.readLine()) != null){
				if(cont == 0){
					header = line.split(",",-1);
					cont++;
				}else break;
			}
			br.close();
		} catch (IOException ex){
			ex.printStackTrace();
		}
		return header;
	}
	//csvから問題を読み込む
	public static List<QuizBox> csvToChooselist(){
		List<QuizBox> Chooselist = new ArrayList<QuizBox>();
		QuizBox choose = null;

		try {
			FileReader fr = new FileReader("quizz.csv");
			BufferedReader br = new BufferedReader(fr);

			String line;
			while((line = br.readLine()) != null){
				choose = new QuizBox();
				String[] row = line.split(",",-1);

				for(int i = 0;i < row.length; i++){
					switch(i){
						case 0: choose.setAnswer(row[i]);break;
						case 1: choose.setKeyWord1(row[i]);break;
						case 2: choose.setKeyWord2(row[i]);break;
					}
				}
				Chooselist.add(choose);
			}
			br.close();
		} catch (IOException ex){
			ex.printStackTrace();
		}
		return Chooselist;
	}

	//csvからユーザーの情報を読み込む
	public static List<HashMap<String, String>> csvToScorelist(String userId){
		List<HashMap<String, String>> ScoreList = new ArrayList<HashMap<String,String>>();
		String[] header = null;
		String[] row = null;
		//userIdによって、ユーザーを探す
		try {
			FileReader fr = new FileReader("name.csv");
			BufferedReader br = new BufferedReader(fr);
			
			String line;
			int cont = 0;
			while((line = br.readLine()) != null){
				if(cont == 0){
					header = line.split(",",-1);
					cont++;
				}else{
					row = line.split(",",-1);
					if(row[0].equals(userId)){
						row = line.split(",",-1);
						break;
					}
					else continue;
				}
			}
			br.close();
		} catch (FileNotFoundException e) {
			e.printStackTrace();
		} catch (IOException e) {
			e.printStackTrace();
		}
		//ユーザー情報の取得
		for(int i = 0;i < row.length;i++){
			HashMap<String, String> userScore = new HashMap<String, String>();
			userScore.put(header[i], row[i]);
			ScoreList.add(userScore);
		}
		return ScoreList;
	}
	//入力チェック
	public static int scanCheck(){
		int tmp = 0;
		int numCheck = 0;
		do{
			try{
				tmp = 0;

				numCheck = new Scanner(System.in).nextInt();
			}catch (InputMismatchException e){
				System.out.println("整数を入力してください!");
				tmp++;
			}

		}while(tmp !=0);

		return numCheck;
	}

	//難易度の選択--問題数を選ぶこと
	public static int levelChoose(){
		int tmp = 0;
		int numCheck = 0;
		do{
			try{
				tmp = 0;
				System.out.println("難易度を選んでください。");
				System.out.println("easy--1/normal--2/hard--3/endless--7");
				numCheck = new Scanner(System.in).nextInt();
			}catch (InputMismatchException e){
				System.out.println("整数を入力してください!");
				tmp++;
			}

		}while(tmp !=0);

		return numCheck;
	}


	//keywordの表示
	public static void keyExp(String a,String b){
		System.out.println("キーワード:"+"["+a+"]-"+"["+b+"]");
	}

	//答えのチェック
	public static boolean answerCheck(String c,String p){
		if(p.equals(c)) return true;
		else return false;
	}

	//点数発表;
	public static void scoreOut(int s){

		System.out.println("あなたので点数"+s+"取りました");
	}
	
	//新規ユーザーの初期化;
	public static void UserToCsv(String[] headInfo,String userId){
		int i = 0;
		try{
			 FileWriter fw = new FileWriter("name.csv", true);
	         PrintWriter pw = new PrintWriter(new BufferedWriter(fw));


			while(i < headInfo.length){
					if(i == 0) pw.write(userId+",");
					else if(i <headInfo.length-1) pw.write(0+",");
					else if(i == headInfo.length-1) pw.write(0+"\n");
					i++;
			}
			pw.close();
		}catch (IOException e){
			e.printStackTrace();
		}
	}

}
