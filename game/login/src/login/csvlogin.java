package login;

import java.io.BufferedWriter;
import java.io.FileWriter;
import java.io.IOException;
import java.io.PrintWriter;

public class csvlogin {
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
