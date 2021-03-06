import java.io.IOException;

import twitter4j.ResponseList;
import twitter4j.Status;
import twitter4j.Twitter;
import twitter4j.TwitterException;
import twitter4j.TwitterFactory;
import twitter4j.auth.AccessToken;

public class twitter {
    private final static String CONSUMER_KEY = "qq9OBbHqLFgp3UK9s6JpazeB3";
    private final static String CONSUMER_KEY_SECRET = "QG09le7Rf7E8COfEuiPO4lP8uR2Rt5xa7Gz9ZY5YBlXBrCD4NN";

    public void start() throws TwitterException, IOException {

	Twitter twitter = new TwitterFactory().getInstance();
	twitter.setOAuthConsumer(CONSUMER_KEY, CONSUMER_KEY_SECRET);

	// here's the difference
	String accessToken = getSavedAccessToken();
	String accessTokenSecret = getSavedAccessTokenSecret();
	AccessToken oathAccessToken = new AccessToken(accessToken,
		accessTokenSecret);

	twitter.setOAuthAccessToken(oathAccessToken);
	// end of difference

	twitter.updateStatus("Hi, im updating status again from Namex Tweet for Demo");

	System.out.println("\nMy Timeline:");

	// I'm reading your timeline
	ResponseList<Status> list = twitter.getHomeTimeline();
	for (Status each : list) {

	    System.out.println("Sent by: @" + each.getUser().getScreenName()
		    + " - " + each.getUser().getName() + "\n" + each.getText()
		    + "\n");
	}

    }

    private String getSavedAccessTokenSecret() {
	// consider this is method to get your previously saved Access Token
	// Secret
	return "kRcsQQ0bthHIiKxGKRJ69HIVg7ja9Uffgf3qfK3LpIra0";
    }

    private String getSavedAccessToken() {
	// consider this is method to get your previously saved Access Token
	return "997964346075463680-fMeaq1BT7uOCZLCGmZm69FyLhwXZAq8";
    }

    public static void main(String[] args) throws Exception {
	new twitter().start();
    }
}
