package login;
import java.io.BufferedReader;
import java.io.FileReader;
import java.io.IOException;
import java.text.FieldPosition;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;


class PlayInfo{
	
	private String name;
	private HashMap<String, Integer> answer;
	
	public String getName() {
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

public class recommend {

	public static void main(String[] args) {
		List<PlayInfo> playInfolist = csvToPlayInfo();
		
		
	}

	private static List<PlayInfo> csvToPlayInfo(){
		List<PlayInfo> playInfolist = new ArrayList<PlayInfo>();
		PlayInfo playInfo = null;
		String[] header = null;
		
		try{
			FileReader fr = new FileReader("name.csv");
			BufferedReader br = new BufferedReader(fr);
			
			String line;
			int cont = 0;
			while((line = br.readLine()) != null){
				if (cont == 0){
					header = line.split(",",-1);
					cont++;
				}
				else{
					playInfo = new PlayInfo();
					playInfo.setAnswer(new HashMap<String, Integer>());
					String[] row = line.split(",",-1);
					
					for(int i = 0;i < row.length;i++){
						if(i == 0) playInfo.setName(row[i]);
						else{
							if(!isEmpty(row[i])){
								playInfo.getAnswer()
								.put(header[i], Integer.parseInt(row[i]));
							}
						}
					}
					playInfolist.add(playInfo);
				}
			}
			br.close();
		}catch (IOException ex){
			ex.printStackTrace();
		}
		
		return playInfolist;
	}

	private static boolean isEmpty(String str) {
		if(str == null || str.length() <= 0) return true;
		return false;
	}

}
