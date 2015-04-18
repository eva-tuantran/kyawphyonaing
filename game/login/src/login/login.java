package login;
import java.io.BufferedReader;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;
import java.io.InputStreamReader;
import java.util.ArrayList;
import java.util.Scanner;

public class login {
	private static String[] args;
	public static void main(String[] args) throws IOException, InterruptedException{
		BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
		while(true){
		System.out.println("あなたの名前を入力してください。");
		String input = br.readLine();
		
		if(readToFile(input)){
			writeToFile(input);
			break;
		}
		else{
			Scanner inputScanner = new Scanner(System.in);
			System.out.println("あなたの名前は"+input+"です。\nこの名前でよろしですか?　\nYes='0'  No=='9'");
			int i = inputScanner.nextInt(); 
				if(i == 0){
				//	System.out.println("これはジャンケンゲームです。");
					System.out.println("これはquizゲームです。");
					quiz.main(args);
					break;
				}
			}
		}
		
	}
	private static void writeToFile(String textToWrite) throws InterruptedException{
		final String outputPath = "temp.txt";
		
		try {
			FileWriter fileWriter = new FileWriter(outputPath, true);
			fileWriter.write(textToWrite+"\n");
			fileWriter.close();
			//System.out.println("これはジャンケンゲームです。");
			System.out.println("これはquizゲームです。");
			quiz.main(args);
		} catch (IOException e) {
			System.out.println(e.getMessage());
		}
	}
	@SuppressWarnings("resource")
	private static boolean readToFile(String textToRead){
		boolean result = true;
		String fileName = "temp.txt";
		String line;
		ArrayList<String> aList = new ArrayList<String>();
		
		try{
			BufferedReader input = new BufferedReader(new FileReader(fileName));
			if	(!input.ready()){
				throw new IOException();
			}
			while ((line = input.readLine())!=null){
				aList.add(line);
			}
			input.close();
		}catch(IOException e){
			System.out.println(e);
		}
		String[] d = new String[aList.size()];

		for (int i = 0; i < aList.size(); i++) {
			d[i] = (String) aList.get(i);
			   // System.out.println(d[i]);
			if(d[i].equals(textToRead)){
				System.out.println("あなたの名前はすでに持っていたされている。");
				result = false;
				break;
			}
		}
		return result;
	}
}
