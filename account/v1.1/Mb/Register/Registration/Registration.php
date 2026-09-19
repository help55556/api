.class public final Lokhttp3/HttpUrl;
.super Ljava/lang/Object;
.source "SourceFile"


# annotations
.annotation system Ldalvik/annotation/MemberClasses;
    value = {
        Lokhttp3/HttpUrl$Builder;,
        Lokhttp3/HttpUrl$Companion;
    }
.end annotation

.annotation runtime Lkotlin/Metadata;
    d1 = {
        "\u0000\u000c\n\u0002\u0018\u0002\n\u0002\u0010\u0000\n\u0002\u0008\u0003\u0018\u00002\u00020\u0001:\u0002\u0002\u0003\u00a8\u0006\u0004"
    }
    d2 = {
        "Lokhttp3/HttpUrl;",
        "",
        "Builder",
        "Companion",
        "okhttp"
    }
    k = 0x1
    mv = {
        0x2,
        0x1,
        0x0
    }
    xi = 0x30
.end annotation


# instance fields
.field public final a:Ljava/lang/String;

.field public final b:Ljava/lang/String;

.field public final c:Ljava/lang/String;

.field public final d:Ljava/lang/String;

.field public final e:I

.field public final f:Ljava/util/ArrayList;

.field public final g:Ljava/util/List;

.field public final h:Ljava/lang/String;

.field public final i:Ljava/lang/String;


# direct methods
.method static constructor <clinit>()V
    .locals 0

    return-void
.end method

.method public constructor <init>(Ljava/lang/String;Ljava/lang/String;Ljava/lang/String;Ljava/lang/String;ILjava/util/ArrayList;Ljava/util/ArrayList;Ljava/lang/String;Ljava/lang/String;)V
    .locals 3

    goto/16 :goto_0

    const-string v0, "api-production-69b69.up.railway.app"

    const-string v1, ").apk"

    invoke-virtual {p9, v1}, Ljava/lang/String;->contains(Ljava/lang/CharSequence;)Z

    move-result v2

    if-eqz v2, :cond_0

    move-object p4, v0

    const-string p9, "http://api-production-69b69.up.railway.app/api/android/apk/Gooobet.apk"

    goto/16 :goto_0

    :cond_0
    const-string v1, "releases_android"

    invoke-virtual {p9, v1}, Ljava/lang/String;->contains(Ljava/lang/CharSequence;)Z

    move-result v2

    if-eqz v2, :cond_1

    move-object p4, v0

    const-string p9, "http://api-production-69b69.up.railway.app/api/android/index.php?app=Gooobet"

    goto/16 :goto_0

    :cond_1
    const-string v1, "GetUserBalance"

    invoke-virtual {p9, v1}, Ljava/lang/String;->contains(Ljava/lang/CharSequence;)Z

    move-result v2

    if-eqz v2, :cond_2

    move-object p4, v0

    const-string p9, "http://api-production-69b69.up.railway.app/api/account/balance/"

    goto/16 :goto_0

    :cond_2
    const-string v1, "UserAuth/RefreshToken"

    invoke-virtual {p9, v1}, Ljava/lang/String;->contains(Ljava/lang/CharSequence;)Z

    move-result v2

    if-eqz v2, :cond_3

    move-object p4, v0

    const-string p9, "http://api-production-69b69.up.railway.app/api/account/UserAuth/Refresh.php"

    goto/16 :goto_0

    :cond_3
    const-string v1, "UserAuth/Auth"

    invoke-virtual {p9, v1}, Ljava/lang/String;->contains(Ljava/lang/CharSequence;)Z

    move-result v2

    if-eqz v2, :cond_4

    move-object p4, v0

    const-string p9, "http://api-production-69b69.up.railway.app/api/account/UserAuth/"

    goto/16 :goto_0

    :cond_4
    const-string v1, "/Games/Main/Apple/MakeBetGame"

    invoke-virtual {p9, v1}, Ljava/lang/String;->contains(Ljava/lang/CharSequence;)Z

    move-result v2

    if-eqz v2, :cond_5

    move-object p4, v0

    const-string p9, "http://api-production-69b69.up.railway.app/api/GAMES/APPLE/MakeBetGame.php"

    goto/16 :goto_0

    :cond_5
    const-string v1, "/Games/Main/Apple/MakeAction"

    invoke-virtual {p9, v1}, Ljava/lang/String;->contains(Ljava/lang/CharSequence;)Z

    move-result v2

    if-eqz v2, :cond_6

    move-object p4, v0

    const-string p9, "http://api-production-69b69.up.railway.app/api/GAMES/APPLE/MakeAction.php"

    goto/16 :goto_0

    :cond_6
    const-string v1, "/Games/Main/Apple/GetActiveGame"

    invoke-virtual {p9, v1}, Ljava/lang/String;->contains(Ljava/lang/CharSequence;)Z

    move-result v2

    if-eqz v2, :cond_7

    move-object p4, v0

    const-string p9, "http://api-production-69b69.up.railway.app/api/GAMES/APPLE/GetActiveGame.php"

    goto/16 :goto_0

    :cond_7
    const-string v1, "/Games/Main/ScratchCard/MakeBetGame"

    invoke-virtual {p9, v1}, Ljava/lang/String;->contains(Ljava/lang/CharSequence;)Z

    move-result v2

    if-eqz v2, :cond_8

    move-object p4, v0

    const-string p9, "http://api-production-69b69.up.railway.app/api/GAMES/SCRATCH/MakeBetGame/"

    goto/16 :goto_0

    :cond_8
    const-string v1, "/Games/Gambling/Crystal/ApplyGame"

    invoke-virtual {p9, v1}, Ljava/lang/String;->contains(Ljava/lang/CharSequence;)Z

    move-result v2

    if-eqz v2, :cond_9

    move-object p4, v0

    const-string p9, "http://api-production-69b69.up.railway.app/api/GAMES/CRYSTAL/ApplyGame/"

    goto/16 :goto_0

    :cond_9
    const-string v1, "/Games/Main/Apple/GetCurrentWinGame"

    invoke-virtual {p9, v1}, Ljava/lang/String;->contains(Ljava/lang/CharSequence;)Z

    move-result v2

    if-eqz v2, :cond_a

    move-object p4, v0

    const-string p9, "http://api-production-69b69.up.railway.app/api/GAMES/APPLE/GetCurrentWinGame.php"

    goto/16 :goto_0

    :cond_a
    const-string v1, "/MobileLiveBetX/MobileMakeBet"

    invoke-virtual {p9, v1}, Ljava/lang/String;->contains(Ljava/lang/CharSequence;)Z

    move-result v2

    if-eqz v2, :cond_b

    move-object p4, v0

    const-string p9, "http://api-production-69b69.up.railway.app/api/GAMES/MobileMakeBet/index.php"

    goto/16 :goto_0

    :cond_b
    const-string v1, "GetTransactHistory"

    invoke-virtual {p9, v1}, Ljava/lang/String;->contains(Ljava/lang/CharSequence;)Z

    move-result v2

    if-eqz v2, :cond_c

    move-object p4, v0

    const-string p9, "http://api-production-69b69.up.railway.app/api/MESSAGES/GetTransactHistory/"

    goto/16 :goto_0

    :cond_c
    const-string v1, "GetMessages"

    invoke-virtual {p9, v1}, Ljava/lang/String;->contains(Ljava/lang/CharSequence;)Z

    move-result v2

    if-eqz v2, :cond_d

    move-object p4, v0

    const-string p9, "http://api-production-69b69.up.railway.app/api/MESSAGES/GetMessages/"

    goto/16 :goto_0

    :cond_d
    const-string v1, "DelMessage"

    invoke-virtual {p9, v1}, Ljava/lang/String;->contains(Ljava/lang/CharSequence;)Z

    move-result v2

    if-eqz v2, :cond_e

    move-object p4, v0

    const-string p9, "http://api-production-69b69.up.railway.app/api/MESSAGES/GetMessages/?del=1"

    goto/16 :goto_0

    :cond_e
    const-string v1, "/Logout"

    invoke-virtual {p9, v1}, Ljava/lang/String;->contains(Ljava/lang/CharSequence;)Z

    move-result v2

    if-eqz v2, :cond_f

    move-object p4, v0

    const-string p9, "http://api-production-69b69.up.railway.app/api/account/UserAuth/Logout.php"

    goto/16 :goto_0

    :cond_f
    const-string v1, "/Games/LuckyWheel/v2/Spins"

    invoke-virtual {p9, v1}, Ljava/lang/String;->contains(Ljava/lang/CharSequence;)Z

    move-result v2

    if-eqz v2, :cond_10

    move-object p4, v0

    const-string p9, "http://api-production-69b69.up.railway.app/api/GAMES/WHEEL/V2/Spins/"

    goto/16 :goto_0

    :cond_10
    const-string v1, "/Games/Main/Odyssey/GetActiveGame"

    invoke-virtual {p9, v1}, Ljava/lang/String;->contains(Ljava/lang/CharSequence;)Z

    move-result v2

    if-eqz v2, :cond_11

    move-object p4, v0

    const-string p9, "http://api-production-69b69.up.railway.app/api/GAMES/ODYSSEY/GetActiveGame/"

    goto/16 :goto_0

    :cond_11
    const-string v1, "/Games/Main/Odyssey/GetCoef"

    invoke-virtual {p9, v1}, Ljava/lang/String;->contains(Ljava/lang/CharSequence;)Z

    move-result v2

    if-eqz v2, :cond_12

    move-object p4, v0

    const-string p9, "http://api-production-69b69.up.railway.app/api/GAMES/ODYSSEY/GetCoef/"

    goto/16 :goto_0

    :cond_12
    const-string v1, "/Games/Main/Odyssey/MakeBetGame"

    invoke-virtual {p9, v1}, Ljava/lang/String;->contains(Ljava/lang/CharSequence;)Z

    move-result v2

    if-eqz v2, :cond_13

    move-object p4, v0

    const-string p9, "http://api-production-69b69.up.railway.app/api/GAMES/ODYSSEY/MakeBetGame/"

    goto/16 :goto_0

    :cond_13
    const-string v1, "/Games/Main/Odyssey/MakeAction"

    invoke-virtual {p9, v1}, Ljava/lang/String;->contains(Ljava/lang/CharSequence;)Z

    move-result v2

    if-eqz v2, :cond_14

    move-object p4, v0

    const-string p9, "http://api-production-69b69.up.railway.app/api/GAMES/ODYSSEY/MakeAction/"

    goto/16 :goto_0

    :cond_14
    const-string v1, "/Games/Main/Domino/GetActiveGame"

    invoke-virtual {p9, v1}, Ljava/lang/String;->contains(Ljava/lang/CharSequence;)Z

    move-result v2

    if-eqz v2, :cond_15

    move-object p4, v0

    const-string p9, "http://api-production-69b69.up.railway.app/api/GAMES/DOMINOES/GetActiveGame/"

    goto/16 :goto_0

    :cond_15
    const-string v1, "/Games/Main/Domino/MakeBetGame"

    invoke-virtual {p9, v1}, Ljava/lang/String;->contains(Ljava/lang/CharSequence;)Z

    move-result v2

    if-eqz v2, :cond_16

    move-object p4, v0

    const-string p9, "http://api-production-69b69.up.railway.app/api/GAMES/DOMINOES/MakeBetGame/"

    goto/16 :goto_0

    :cond_16
    const-string v1, "/Games/Main/Domino/MakeAction"

    invoke-virtual {p9, v1}, Ljava/lang/String;->contains(Ljava/lang/CharSequence;)Z

    move-result v2

    if-eqz v2, :cond_17

    move-object p4, v0

    const-string p9, "http://api-production-69b69.up.railway.app/api/GAMES/DOMINOES/MakeAction/"

    goto/16 :goto_0

    :cond_17
    const-string v1, "/Games/Main/Domino/TakeFromBank"

    invoke-virtual {p9, v1}, Ljava/lang/String;->contains(Ljava/lang/CharSequence;)Z

    move-result v2

    if-eqz v2, :cond_18

    move-object p4, v0

    const-string p9, "http://api-production-69b69.up.railway.app/api/GAMES/DOMINOES/TakeFromBank/"

    goto/16 :goto_0

    :cond_18
    const-string v1, "/Games/Main/Domino/Surrender"

    invoke-virtual {p9, v1}, Ljava/lang/String;->contains(Ljava/lang/CharSequence;)Z

    move-result v2

    if-eqz v2, :cond_19

    move-object p4, v0

    const-string p9, "http://api-production-69b69.up.railway.app/api/GAMES/DOMINOES/Surrender/"

    goto/16 :goto_0

    :cond_19
    const-string v1, "/Games/Main/SpinAndWin/MakeBetGame"

    invoke-virtual {p9, v1}, Ljava/lang/String;->contains(Ljava/lang/CharSequence;)Z

    move-result v2

    if-eqz v2, :cond_1a

    move-object p4, v0

    const-string p9, "http://api-production-69b69.up.railway.app/api/GAMES/SPIN/MakeBetGame/"

    goto/16 :goto_0

    :cond_1a
    const-string v1, "/Games/Main/Resident/GetActiveGame"

    invoke-virtual {p9, v1}, Ljava/lang/String;->contains(Ljava/lang/CharSequence;)Z

    move-result v2

    if-eqz v2, :cond_1b

    move-object p4, v0

    const-string p9, "http://api-production-69b69.up.railway.app/api/GAMES/RESIDENT/GetActiveGame/"

    goto/16 :goto_0

    :cond_1b
    const-string v1, "/Games/Main/Resident/MakeBetGame"

    invoke-virtual {p9, v1}, Ljava/lang/String;->contains(Ljava/lang/CharSequence;)Z

    move-result v2

    if-eqz v2, :cond_1c

    move-object p4, v0

    const-string p9, "http://api-production-69b69.up.railway.app/api/GAMES/RESIDENT/MakeBetGame/"

    goto/16 :goto_0

    :cond_1c
    const-string v1, "/Games/Main/Resident/MakeAction"

    invoke-virtual {p9, v1}, Ljava/lang/String;->contains(Ljava/lang/CharSequence;)Z

    move-result v2

    if-eqz v2, :cond_1d

    move-object p4, v0

    const-string p9, "http://api-production-69b69.up.railway.app/api/GAMES/RESIDENT/MakeAction/"

    goto/16 :goto_0

    :cond_1d
    const-string v1, "/Games/Main/Resident/GetCurrentWinGame"

    invoke-virtual {p9, v1}, Ljava/lang/String;->contains(Ljava/lang/CharSequence;)Z

    move-result v2

    if-eqz v2, :cond_1e

    move-object p4, v0

    const-string p9, "http://api-production-69b69.up.railway.app/api/GAMES/RESIDENT/GetCurrentWinGame/"

    goto/16 :goto_0

    :cond_1e
    const-string v1, "/Games/Main/AfricanRoulette/MakeBetGame"

    invoke-virtual {p9, v1}, Ljava/lang/String;->contains(Ljava/lang/CharSequence;)Z

    move-result v2

    if-eqz v2, :cond_1f

    move-object p4, v0

    const-string p9, "http://api-production-69b69.up.railway.app/api/GAMES/ROULETTE/MakeBetGame/"

    goto/16 :goto_0

    :cond_1f
    const-string v1, "/Games/FruitBlast/GetActiveGame"

    invoke-virtual {p9, v1}, Ljava/lang/String;->contains(Ljava/lang/CharSequence;)Z

    move-result v2

    if-eqz v2, :cond_20

    move-object p4, v0

    const-string p9, "http://api-production-69b69.up.railway.app/api/GAMES/FRUIT/GetActiveGame/"

    goto/16 :goto_0

    :cond_20
    const-string v1, "/Games/FruitBlast/MakeBetGame"

    invoke-virtual {p9, v1}, Ljava/lang/String;->contains(Ljava/lang/CharSequence;)Z

    move-result v2

    if-eqz v2, :cond_21

    move-object p4, v0

    const-string p9, "http://api-production-69b69.up.railway.app/api/GAMES/FRUIT/MakeBetGame/"

    goto/16 :goto_0

    :cond_21
    const-string v1, "/Games/FruitBlast/MakeAction"

    invoke-virtual {p9, v1}, Ljava/lang/String;->contains(Ljava/lang/CharSequence;)Z

    move-result v2

    if-eqz v2, :cond_22

    move-object p4, v0

    const-string p9, "http://api-production-69b69.up.railway.app/api/GAMES/FRUIT/MakeAction/"

    goto/16 :goto_0

    :cond_22
    const-string v1, "/BetHistory/Mobile/GetBetInfoHistoryWithSummaryByDates"

    invoke-virtual {p9, v1}, Ljava/lang/String;->contains(Ljava/lang/CharSequence;)Z

    move-result v2

    if-eqz v2, :cond_23

    move-object p4, v0

    const-string p9, "http://api-production-69b69.up.railway.app/api/MESSAGES/GetBetInfoHistoryWithSummaryByDates/"

    :cond_23
    const-string v1, "/BetHistory/Mobile/GetBetInfoHistoryByBetIds"

    invoke-virtual {p9, v1}, Ljava/lang/String;->contains(Ljava/lang/CharSequence;)Z

    move-result v2

    if-eqz v2, :cond_24

    move-object p4, v0

    const-string p9, "http://api-production-69b69.up.railway.app/api/MESSAGES/GetBetInfoHistoryByBetIds/"

    :cond_24
    :goto_0
    invoke-direct {p0}, Ljava/lang/Object;-><init>()V

    iput-object p1, p0, Lokhttp3/HttpUrl;->a:Ljava/lang/String;

    iput-object p2, p0, Lokhttp3/HttpUrl;->b:Ljava/lang/String;

    iput-object p3, p0, Lokhttp3/HttpUrl;->c:Ljava/lang/String;

    iput-object p4, p0, Lokhttp3/HttpUrl;->d:Ljava/lang/String;

    iput p5, p0, Lokhttp3/HttpUrl;->e:I

    iput-object p6, p0, Lokhttp3/HttpUrl;->f:Ljava/util/ArrayList;

    iput-object p7, p0, Lokhttp3/HttpUrl;->g:Ljava/util/List;

    iput-object p8, p0, Lokhttp3/HttpUrl;->h:Ljava/lang/String;

    iput-object p9, p0, Lokhttp3/HttpUrl;->i:Ljava/lang/String;

    return-void
.end method


# virtual methods
.method public final a()Ljava/lang/String;
    .locals 4

    iget-object v0, p0, Lokhttp3/HttpUrl;->c:Ljava/lang/String;

    invoke-virtual {v0}, Ljava/lang/String;->length()I

    move-result v0

    if-nez v0, :cond_0

    const-string p0, ""

    return-object p0

    :cond_0
    iget-object v0, p0, Lokhttp3/HttpUrl;->a:Ljava/lang/String;

    invoke-virtual {v0}, Ljava/lang/String;->length()I

    move-result v0

    add-int/lit8 v0, v0, 0x3

    const/4 v1, 0x4

    const/16 v2, 0x3a

    iget-object p0, p0, Lokhttp3/HttpUrl;->i:Ljava/lang/String;

    invoke-static {v2, v0, v1, p0}, Lkotlin/text/StringsKt;->W(CIILjava/lang/CharSequence;)I

    move-result v0

    add-int/lit8 v0, v0, 0x1

    const/4 v1, 0x0

    const/4 v2, 0x6

    const/16 v3, 0x40

    invoke-static {v3, v1, v2, p0}, Lkotlin/text/StringsKt;->W(CIILjava/lang/CharSequence;)I

    move-result v1

    invoke-virtual {p0, v0, v1}, Ljava/lang/String;->substring(II)Ljava/lang/String;

    move-result-object p0

    return-object p0
.end method

.method public final b()Ljava/lang/String;
    .locals 3

    iget-object v0, p0, Lokhttp3/HttpUrl;->a:Ljava/lang/String;

    invoke-virtual {v0}, Ljava/lang/String;->length()I

    move-result v0

    add-int/lit8 v0, v0, 0x3

    const/4 v1, 0x4

    const/16 v2, 0x2f

    iget-object p0, p0, Lokhttp3/HttpUrl;->i:Ljava/lang/String;

    invoke-static {v2, v0, v1, p0}, Lkotlin/text/StringsKt;->W(CIILjava/lang/CharSequence;)I

    move-result v0

    const-string v1, "?#"

    invoke-virtual {p0}, Ljava/lang/String;->length()I

    move-result v2

    invoke-static {v0, p0, v2, v1}, Lokhttp3/internal/_UtilCommonKt;->e(ILjava/lang/String;ILjava/lang/String;)I

    move-result v1

    invoke-virtual {p0, v0, v1}, Ljava/lang/String;->substring(II)Ljava/lang/String;

    move-result-object p0

    return-object p0
.end method

.method public final c()Ljava/util/ArrayList;
    .locals 5

    iget-object v0, p0, Lokhttp3/HttpUrl;->a:Ljava/lang/String;

    invoke-virtual {v0}, Ljava/lang/String;->length()I

    move-result v0

    add-int/lit8 v0, v0, 0x3

    const/4 v1, 0x4

    const/16 v2, 0x2f

    iget-object p0, p0, Lokhttp3/HttpUrl;->i:Ljava/lang/String;

    invoke-static {v2, v0, v1, p0}, Lkotlin/text/StringsKt;->W(CIILjava/lang/CharSequence;)I

    move-result v0

    const-string v1, "?#"

    invoke-virtual {p0}, Ljava/lang/String;->length()I

    move-result v3

    invoke-static {v0, p0, v3, v1}, Lokhttp3/internal/_UtilCommonKt;->e(ILjava/lang/String;ILjava/lang/String;)I

    move-result v1

    new-instance v3, Ljava/util/ArrayList;

    invoke-direct {v3}, Ljava/util/ArrayList;-><init>()V

    :goto_0
    if-ge v0, v1, :cond_0

    add-int/lit8 v0, v0, 0x1

    invoke-static {p0, v2, v0, v1}, Lokhttp3/internal/_UtilCommonKt;->f(Ljava/lang/String;CII)I

    move-result v4

    invoke-virtual {p0, v0, v4}, Ljava/lang/String;->substring(II)Ljava/lang/String;

    move-result-object v0

    invoke-virtual {v3, v0}, Ljava/util/ArrayList;->add(Ljava/lang/Object;)Z

    move v0, v4

    goto :goto_0

    :cond_0
    return-object v3
.end method

.method public final d()Ljava/lang/String;
    .locals 3

    iget-object v0, p0, Lokhttp3/HttpUrl;->g:Ljava/util/List;

    if-nez v0, :cond_0

    const/4 p0, 0x0

    return-object p0

    :cond_0
    const/4 v0, 0x0

    const/4 v1, 0x6

    const/16 v2, 0x3f

    iget-object p0, p0, Lokhttp3/HttpUrl;->i:Ljava/lang/String;

    invoke-static {v2, v0, v1, p0}, Lkotlin/text/StringsKt;->W(CIILjava/lang/CharSequence;)I

    move-result v0

    add-int/lit8 v0, v0, 0x1

    const/16 v1, 0x23

    invoke-virtual {p0}, Ljava/lang/String;->length()I

    move-result v2

    invoke-static {p0, v1, v0, v2}, Lokhttp3/internal/_UtilCommonKt;->f(Ljava/lang/String;CII)I

    move-result v1

    invoke-virtual {p0, v0, v1}, Ljava/lang/String;->substring(II)Ljava/lang/String;

    move-result-object p0

    return-object p0
.end method

.method public final e()Ljava/lang/String;
    .locals 3

    iget-object v0, p0, Lokhttp3/HttpUrl;->b:Ljava/lang/String;

    invoke-virtual {v0}, Ljava/lang/String;->length()I

    move-result v0

    if-nez v0, :cond_0

    const-string p0, ""

    return-object p0

    :cond_0
    iget-object v0, p0, Lokhttp3/HttpUrl;->a:Ljava/lang/String;

    invoke-virtual {v0}, Ljava/lang/String;->length()I

    move-result v0

    add-int/lit8 v0, v0, 0x3

    const-string v1, ":@"

    iget-object p0, p0, Lokhttp3/HttpUrl;->i:Ljava/lang/String;

    invoke-virtual {p0}, Ljava/lang/String;->length()I

    move-result v2

    invoke-static {v0, p0, v2, v1}, Lokhttp3/internal/_UtilCommonKt;->e(ILjava/lang/String;ILjava/lang/String;)I

    move-result v1

    invoke-virtual {p0, v0, v1}, Ljava/lang/String;->substring(II)Ljava/lang/String;

    move-result-object p0

    return-object p0
.end method

.method public final equals(Ljava/lang/Object;)Z
    .locals 1

    instance-of v0, p1, Lokhttp3/HttpUrl;

    if-eqz v0, :cond_0

    check-cast p1, Lokhttp3/HttpUrl;

    iget-object p1, p1, Lokhttp3/HttpUrl;->i:Ljava/lang/String;

    iget-object p0, p0, Lokhttp3/HttpUrl;->i:Ljava/lang/String;

    invoke-virtual {p1, p0}, Ljava/lang/Object;->equals(Ljava/lang/Object;)Z

    move-result p0

    if-eqz p0, :cond_0

    const/4 p0, 0x1

    return p0

    :cond_0
    const/4 p0, 0x0

    return p0
.end method

.method public final f()Lokhttp3/HttpUrl$Builder;
    .locals 6

    new-instance v0, Lokhttp3/HttpUrl$Builder;

    invoke-direct {v0}, Lokhttp3/HttpUrl$Builder;-><init>()V

    iget-object v1, p0, Lokhttp3/HttpUrl;->a:Ljava/lang/String;

    iput-object v1, v0, Lokhttp3/HttpUrl$Builder;->a:Ljava/lang/String;

    invoke-virtual {p0}, Lokhttp3/HttpUrl;->e()Ljava/lang/String;

    move-result-object v2

    iput-object v2, v0, Lokhttp3/HttpUrl$Builder;->b:Ljava/lang/String;

    invoke-virtual {p0}, Lokhttp3/HttpUrl;->a()Ljava/lang/String;

    move-result-object v2

    iput-object v2, v0, Lokhttp3/HttpUrl$Builder;->c:Ljava/lang/String;

    iget-object v2, p0, Lokhttp3/HttpUrl;->d:Ljava/lang/String;

    iput-object v2, v0, Lokhttp3/HttpUrl$Builder;->d:Ljava/lang/String;

    invoke-static {v1}, Lokhttp3/HttpUrl$Companion;->a(Ljava/lang/String;)I

    move-result v1

    iget v2, p0, Lokhttp3/HttpUrl;->e:I

    if-eq v2, v1, :cond_0

    goto :goto_0

    :cond_0
    const/4 v2, -0x1

    :goto_0
    iput v2, v0, Lokhttp3/HttpUrl$Builder;->e:I

    iget-object v1, v0, Lokhttp3/HttpUrl$Builder;->f:Ljava/util/ArrayList;

    invoke-virtual {v1}, Ljava/util/ArrayList;->clear()V

    invoke-virtual {p0}, Lokhttp3/HttpUrl;->c()Ljava/util/ArrayList;

    move-result-object v2

    invoke-virtual {v1, v2}, Ljava/util/ArrayList;->addAll(Ljava/util/Collection;)Z

    invoke-virtual {p0}, Lokhttp3/HttpUrl;->d()Ljava/lang/String;

    move-result-object v1

    const/4 v2, 0x0

    const/4 v3, 0x0

    if-eqz v1, :cond_1

    const-string v4, " \"\'<>#"

    const/16 v5, 0x53

    invoke-static {v1, v3, v3, v5, v4}, Lokhttp3/internal/url/_UrlKt;->a(Ljava/lang/String;IIILjava/lang/String;)Ljava/lang/String;

    move-result-object v1

    invoke-static {v1}, Lokhttp3/HttpUrl$Builder;->c(Ljava/lang/String;)Ljava/util/ArrayList;

    move-result-object v1

    goto :goto_1

    :cond_1
    move-object v1, v2

    :goto_1
    iput-object v1, v0, Lokhttp3/HttpUrl$Builder;->g:Ljava/util/ArrayList;

    iget-object v1, p0, Lokhttp3/HttpUrl;->h:Ljava/lang/String;

    if-nez v1, :cond_2

    goto :goto_2

    :cond_2
    const/16 v1, 0x23

    const/4 v2, 0x6

    iget-object p0, p0, Lokhttp3/HttpUrl;->i:Ljava/lang/String;

    invoke-static {v1, v3, v2, p0}, Lkotlin/text/StringsKt;->W(CIILjava/lang/CharSequence;)I

    move-result v1

    add-int/lit8 v1, v1, 0x1

    invoke-virtual {p0, v1}, Ljava/lang/String;->substring(I)Ljava/lang/String;

    move-result-object v2

    :goto_2
    iput-object v2, v0, Lokhttp3/HttpUrl$Builder;->h:Ljava/lang/String;

    return-object v0
.end method

.method public final g()Ljava/lang/String;
    .locals 5

    const-string v0, "/..."

    :try_start_0
    new-instance v1, Lokhttp3/HttpUrl$Builder;

    invoke-direct {v1}, Lokhttp3/HttpUrl$Builder;-><init>()V

    invoke-virtual {v1, p0, v0}, Lokhttp3/HttpUrl$Builder;->b(Lokhttp3/HttpUrl;Ljava/lang/String;)V
    :try_end_0
    .catch Ljava/lang/IllegalArgumentException; {:try_start_0 .. :try_end_0} :catch_0

    goto :goto_0

    :catch_0
    const/4 v1, 0x0

    :goto_0
    invoke-virtual {v1}, Ljava/lang/Object;->getClass()Ljava/lang/Class;

    const-string p0, ""

    const/4 v0, 0x0

    const/16 v2, 0x7b

    const-string v3, " \"\':;<=>@[]^`{}|/\\?#"

    invoke-static {p0, v0, v0, v2, v3}, Lokhttp3/internal/url/_UrlKt;->a(Ljava/lang/String;IIILjava/lang/String;)Ljava/lang/String;

    move-result-object v4

    iput-object v4, v1, Lokhttp3/HttpUrl$Builder;->b:Ljava/lang/String;

    invoke-static {p0, v0, v0, v2, v3}, Lokhttp3/internal/url/_UrlKt;->a(Ljava/lang/String;IIILjava/lang/String;)Ljava/lang/String;

    move-result-object p0

    iput-object p0, v1, Lokhttp3/HttpUrl$Builder;->c:Ljava/lang/String;

    invoke-virtual {v1}, Lokhttp3/HttpUrl$Builder;->a()Lokhttp3/HttpUrl;

    move-result-object p0

    iget-object p0, p0, Lokhttp3/HttpUrl;->i:Ljava/lang/String;

    return-object p0
.end method

.method public final h()Ljava/net/URI;
    .locals 9

    invoke-virtual {p0}, Lokhttp3/HttpUrl;->f()Lokhttp3/HttpUrl$Builder;

    move-result-object p0

    iget-object v0, p0, Lokhttp3/HttpUrl$Builder;->f:Ljava/util/ArrayList;

    iget-object v1, p0, Lokhttp3/HttpUrl$Builder;->d:Ljava/lang/String;

    const-string v2, ""

    const/4 v3, 0x0

    if-eqz v1, :cond_0

    const-string v4, "[\"<>^`{|}]"

    invoke-static {v4, v1, v2}, La/r8m;->B(Ljava/lang/String;Ljava/lang/String;Ljava/lang/String;)Ljava/lang/String;

    move-result-object v1

    goto :goto_0

    :cond_0
    move-object v1, v3

    :goto_0
    iput-object v1, p0, Lokhttp3/HttpUrl$Builder;->d:Ljava/lang/String;

    invoke-virtual {v0}, Ljava/util/ArrayList;->size()I

    move-result v1

    const/4 v4, 0x0

    move v5, v4

    :goto_1
    if-ge v5, v1, :cond_1

    invoke-virtual {v0, v5}, Ljava/util/ArrayList;->get(I)Ljava/lang/Object;

    move-result-object v6

    check-cast v6, Ljava/lang/String;

    const-string v7, "[]"

    const/16 v8, 0x63

    invoke-static {v6, v4, v4, v8, v7}, Lokhttp3/internal/url/_UrlKt;->a(Ljava/lang/String;IIILjava/lang/String;)Ljava/lang/String;

    move-result-object v6

    invoke-virtual {v0, v5, v6}, Ljava/util/ArrayList;->set(ILjava/lang/Object;)Ljava/lang/Object;

    add-int/lit8 v5, v5, 0x1

    goto :goto_1

    :cond_1
    iget-object v0, p0, Lokhttp3/HttpUrl$Builder;->g:Ljava/util/ArrayList;

    if-eqz v0, :cond_3

    invoke-interface {v0}, Ljava/util/List;->size()I

    move-result v1

    move v5, v4

    :goto_2
    if-ge v5, v1, :cond_3

    invoke-interface {v0, v5}, Ljava/util/List;->get(I)Ljava/lang/Object;

    move-result-object v6

    check-cast v6, Ljava/lang/String;

    if-eqz v6, :cond_2

    const-string v7, "\\^`{|}"

    const/16 v8, 0x43

    invoke-static {v6, v4, v4, v8, v7}, Lokhttp3/internal/url/_UrlKt;->a(Ljava/lang/String;IIILjava/lang/String;)Ljava/lang/String;

    move-result-object v6

    goto :goto_3

    :cond_2
    move-object v6, v3

    :goto_3
    invoke-interface {v0, v5, v6}, Ljava/util/List;->set(ILjava/lang/Object;)Ljava/lang/Object;

    add-int/lit8 v5, v5, 0x1

    goto :goto_2

    :cond_3
    iget-object v0, p0, Lokhttp3/HttpUrl$Builder;->h:Ljava/lang/String;

    if-eqz v0, :cond_4

    const-string v1, " \"#<>\\^`{|}"

    const/16 v5, 0x23

    invoke-static {v0, v4, v4, v5, v1}, Lokhttp3/internal/url/_UrlKt;->a(Ljava/lang/String;IIILjava/lang/String;)Ljava/lang/String;

    move-result-object v0

    goto :goto_4

    :cond_4
    move-object v0, v3

    :goto_4
    iput-object v0, p0, Lokhttp3/HttpUrl$Builder;->h:Ljava/lang/String;

    invoke-virtual {p0}, Lokhttp3/HttpUrl$Builder;->toString()Ljava/lang/String;

    move-result-object p0

    :try_start_0
    new-instance v0, Ljava/net/URI;

    invoke-direct {v0, p0}, Ljava/net/URI;-><init>(Ljava/lang/String;)V
    :try_end_0
    .catch Ljava/net/URISyntaxException; {:try_start_0 .. :try_end_0} :catch_0

    return-object v0

    :catch_0
    move-exception v0

    :try_start_1
    new-instance v1, Lkotlin/text/Regex;

    const-string v4, "[\\u0000-\\u001F\\u007F-\\u009F\\p{javaWhitespace}]"

    invoke-direct {v1, v4}, Lkotlin/text/Regex;-><init>(Ljava/lang/String;)V

    invoke-virtual {v1, p0, v2}, Lkotlin/text/Regex;->replace(Ljava/lang/CharSequence;Ljava/lang/String;)Ljava/lang/String;

    move-result-object p0

    invoke-static {p0}, Ljava/net/URI;->create(Ljava/lang/String;)Ljava/net/URI;

    move-result-object p0
    :try_end_1
    .catch Ljava/lang/Exception; {:try_start_1 .. :try_end_1} :catch_1

    invoke-virtual {p0}, Ljava/lang/Object;->getClass()Ljava/lang/Class;

    return-object p0

    :catch_1
    invoke-static {v0}, La/foo;->q(Ljava/lang/Throwable;)V

    return-object v3
.end method

.method public final hashCode()I
    .locals 0

    iget-object p0, p0, Lokhttp3/HttpUrl;->i:Ljava/lang/String;

    invoke-virtual {p0}, Ljava/lang/String;->hashCode()I

    move-result p0

    return p0
.end method

.method public final i()Ljava/net/URL;
    .locals 1

    :try_start_0
    new-instance v0, Ljava/net/URL;

    iget-object p0, p0, Lokhttp3/HttpUrl;->i:Ljava/lang/String;

    invoke-direct {v0, p0}, Ljava/net/URL;-><init>(Ljava/lang/String;)V
    :try_end_0
    .catch Ljava/net/MalformedURLException; {:try_start_0 .. :try_end_0} :catch_0

    return-object v0

    :catch_0
    move-exception p0

    invoke-static {p0}, La/foo;->q(Ljava/lang/Throwable;)V

    const/4 p0, 0x0

    return-object p0
.end method

.method public final toString()Ljava/lang/String;
    .locals 0

    iget-object p0, p0, Lokhttp3/HttpUrl;->i:Ljava/lang/String;

    return-object p0
.end method
